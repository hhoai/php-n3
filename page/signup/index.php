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
      <h2 class="form-header">Đăng nhập tài khoản</h2>
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
      <form method="post" class="auth-form__content">
        <div  class="auth-form__form">
          <div class="auth-form__group">
            <p class="lable">Tên đăng nhập</p>
            <input
              type="text"
              class="auth-form__input"
              placeholder="Tên đăng nhập"
            />
          </div>
          <div class="auth-form__group">
            <p class="lable">Mật khẩu</p>
            <input
              type="password"
              class="auth-form__input"
              placeholder="Mật khẩu"
            />
          </div>
          <div class="auth-form__miss">
            <a class="auth-form__miss-t">Quên mật khẩu?</a>
          </div>
        </div>

        <div class="auth-form__controls">
          <button class="btn">Đăng nhập</button>
        </div>
      </form>
    </div>
  </div>
  <?php require("../../layout/footer/index.php"); ?>
</body>
</html>