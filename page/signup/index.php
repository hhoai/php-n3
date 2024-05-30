<?php
  require_once 'google-api/vendor/autoload.php';

  // Lấy những giá trị này từ https://console.google.com
  $client_id = '195730806723-lbioafvnql787ss4br9ntd0e5lfpvssm.apps.googleusercontent.com'; 
  $client_secret = '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';
  $redirect_uri = 'http://localhost:800/bookstore-client/page/login/index.php';

  //Thông tin kết nói database
  $db_username = "root"; //Database Username
  $db_password = ""; //Database Password
  $host_name = "localhost"; //Mysql Hostname
  $db_name = 'bookstore'; //Database Name
  ###################################################################

  $client = new Google_Client();
  $client->setClientId($client_id);
  $client->setClientSecret($client_secret);
  $client->setRedirectUri($redirect_uri);
  $client->addScope("email");
  $client->addScope("profile");

  $service = new Google_Service_Oauth2($client);

  // Nếu kết nối thành công, sau đó xử lý thông tin và lưu vào database
  if (isset($_GET['code'])) {
      $client->authenticate($_GET['code']);
      $_SESSION['access_token'] = $client->getAccessToken();
      //header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
      $user = $service->userinfo->get(); //get user info 

      // connect to database
      $mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
      if ($mysqli->connect_error) {
          die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
      }

      //Kiểm tra xem nếu user này đã tồn tại, sau đó nên login tự động
      $result = $mysqli->query("SELECT COUNT(userID) as usercount FROM user WHERE userID=$user->id");
      $user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist

      //show user picture
      echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';

      if($user_count) // Nếu user tồn tại thì show thông tin hiện có
      {
          session_start();

          $_SESSION['username'] = $user->name;
          $_SESSION['login'] = 1;
          echo($_SESSION['login']);
      }
      else //Ngược lại tạo mới 1 user vào database
      { 
          $statement = $mysqli->prepare("INSERT INTO user (userID, username, password, fullname, email, role) VALUES (?,?,?,?,?,1)");
          $statement->bind_param('issss', $user->id,  $user->email, $user->name, $user->name, $user->email);
          $statement->execute();
          echo $mysqli->error;
          session_start();
          $_SESSION['username'] = $user->name;
          $_SESSION['login'] = 1;
          echo($_SESSION['login']);

        }
        header("location:/bookstore-client/index.php");
      exit;
  }

  //Nếu sẵn sàng kết nối, sau đó lưu session với tên access_token
  if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
      $client->setAccessToken($_SESSION['access_token']);
  } else { // Ngược lại tạo 1 link để login
      $authUrl = $client->createAuthUrl();
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nhà sách Tiến Thọ</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon2.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
<style>
    <?php include 'signup.css'; ?>
  </style>
<body>
  <?php require("../../layout/header/index.php"); ?>  
  <!-- modal -->
  <!-- sign in -->
  <div class="modal">
    <div class="form__container">
    <?php 
        error_reporting(E_ERROR | E_PARSE);
        if(isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $check_password = $_POST['check_password'];
          // $error="";
          if(empty($username)) {
            $error_name = "* Vui lòng nhập đầy đủ thông tin!";
          }
          if(empty($password)) { 
            $error_password = "* Vui lòng nhập mật khẩu!";
          }
        }
      ?>
      <h2 class="form-header">Đăng nhập tài khoản</h2>
      <div class="auth-form__socials">
        <a href="" class="btn--with-icon facebook-icon">
          <!-- <FaFacebook class="social-icon" /> -->
          <i class="fab fa-facebook social-icon"></i>
          <div>Kết nối với Facebook</div>
        </a>
        <?php 
          if (isset($authUrl)){ 
            echo '<a href="'. $authUrl .'" class="btn--with-icon">
              <!-- <FaGooglePlus class="social-icon" /> -->
              <i class="fab fa-google-plus social-icon"></i>
              <div>Kết nối với Google</div>
            </a>';
          } 
          else {
            echo '<a href="" class="btn--with-icon">
              <!-- <FaGooglePlus class="social-icon" /> -->
              <i class="fab fa-google-plus social-icon"></i>
              <div>Kết nối với Google</div>
            </a>';}
          ?>
      </div>
      <div class="or">
        <hr class="or-hr"/>
        <span class="or-text">hoặc</span>
      </div>
      <form method="post" class="auth-form__content">
        <div  class="auth-form__form">
          <div class="auth-form__group">
              <p class="lable">Tên đăng nhập</p>  
              <input
                  type="text"
                  name="username"
                  value="<?php echo $username;?>"
                  class="auth-form__input"
                  placeholder="Tên đăng nhập"
              />
              <span class="error"><?php echo $error_name; ?></span>
            </div>  
            <div class="auth-form__group">
              <p class="lable">Mật khẩu</p>  
              <input
                  type="password"
                  name="password"
                  value="<?php echo $password;?>"
                  class="auth-form__input"
                  placeholder="Mật khẩu"
              />
              <span class="error"><?php echo $error_password; ?></span>
            </div>
          <div class="auth-form__miss">
            <a class="auth-form__miss-t">Quên mật khẩu?</a>
          </div>
        </div>

        <div class="auth-form__controls">
          <input type="submit" name="login" class="btn" value="Đăng nhập">
        </div>
      </form>
    </div>
  </div>
  <?php require("../../layout/footer/index.php"); ?>
</body>
</html>