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
    <?php include 'login.css'; ?>
  </style>
<body>
  <!-- header -->
  <?php require("../../layout/header/index.php");?>

  <!-- modal -->
  <!-- sign in -->
  <div class="modal">
    <div class="form__container">
      <h2 class="form-header">Đăng ký tài khoản</h2>
      <div class="auth-form__socials">
        <a href="" class="btn--with-icon facebook-icon">
          <!-- <FaFacebook class="social-icon" /> -->
          <i class="fab fa-facebook social-icon"></i>
          <div>Kết nối với Facebook</div>
        </a>
        <a href="" class="btn--with-icon">
          <!-- <FaGooglePlus class="social-icon" /> -->
          <i class="fab fa-google-plus social-icon"></i>
          <div>Kết nối với Google</div>
        </a>
      </div>
      <div class="or">
        <hr class="or-hr"/>
        <span class="or-text">hoặc</span>
      </div>
      <?php 
        error_reporting(E_ERROR | E_PARSE);
        if(isset($_POST['logins'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $check_password = $_POST['check_password'];
          if(empty($username)) {
            $error_username = "Vui long dien ten dang nhap!";
          }
        }
      ?>
      <form class="auth-form__content">
        <div class="auth-form__form">
          <div class="auth-form__group">
          <p class="lable">Tên đăng nhập</p>  
          <input
              type="text"
              name="username"
              value="<?php echo $username;?>"
              class="auth-form__input"
              placeholder="Tên đăng nhập"
          />
          <!-- <input
              type="text"
              value="<?php echo $error_username;?>"
              class="auth-form__input"
          /> -->
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
          </div>
          <div class="auth-form__group">
          <p class="lable">Nhập lại mật khẩu</p>  
          <input
              type="password"
              name="check_password"
              value="<?php echo $check_password;?>"
              class="auth-form__input"
              placeholder="Nhập lại mật khẩu"
            />
          </div>
        </div>

        <div class="auth-form__aside">
          <p class="auth-form__policy-text">
            Bằng cách đăng ký, bạn đồng ý với
            <a href="" class="auth-form__policy-link">
              Điều khoản dịch vụ
            </a>
            &
            <a href="" class="auth-form__policy-link">
              Chính sách bảo mật của chúng tôi.
            </a>
          </p>
        </div>

        <div class="auth-form__controls">
          <input type="submit" name="login" class="btn" value="Đăng ký"></input>
        </div>
      </form>
    </div>
  </div>
  
  <!-- footer -->
  <?php require("../../layout/footer/index.php");?>
</body>
</html>