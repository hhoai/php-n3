<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liên hệ - Nhà sách Tiến Thọ</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon2.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- <link rel="stylesheet" href="./contact.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    <?php include 'contact.css'; ?>
  </style>
  <body>
    <!-- welcome -->
      <div class="welcome">
      <div class="welcome-container flex pl-8">
        <p class="welcome-left">Chào mừng bạn đến với nhà sách Tiến Thọ</p>
        <div class="welcome-log">
          <?php 
            $islogin = false;
            $userName = "Hoa";
            if (!$islogin) {
              ?>
                <a href="../login"> Đăng ký </a>
              | <a href="../signup">Đăng nhập</a>
              <?php
            }
            else {
              echo "
                <a>Xin chào: $userName</a>
              | <a>Đăng xuất</a>
              ";
            } 
          ?>
        </div>
      </div>
    </div>
 
        <!-- toolbar -->
        <div class="header-container">
      <div>
        <img class="logo" src="../../img/logo.png" alt="logo" />
      </div>

      <div class="search">
        <input type="search" placeholder="Tìm kiếm... " />
        <!-- <AiOutlineSearch class="fa-search" /> -->
        <i class="fas fa-search"></i>
      </div>

      <div class="hotline">
        <img class="img-hotline" src="../../img/hotline.webp" alt="hotline" />
        <div class="hotline-phoneNumber">
          <p class="hotline-text">Hotline:</p>
          <a class="hotline-tel" href="tel:0987654321">0987654321</a>
        </div>
      </div>

      <div class="shopping-cart">
        <a class="shopping-cart-container" href="../shoppingCart">
          <!-- <FaShoppingCart class="fa-shopping-cart" /> -->
          <i class="fas fa-shopping-cart"></i>
          Giỏ hàng 
        </a>
        <!-- <div class="notification">
          <div class="notification-message">
            Giỏ hàng của bạn đang trống
            <a class="red" href="../index.html">Tiếp tục mua hàng</a>
          </div>
        </div> -->
      </div>
    </div>


    <!-- navigation -->
    <div class="nav-header">
      <div class="nav-container">
        <li class="nav-left">
          <a href="../collections" class="nav-left-container">
            <p class="fs-16">
              <i class="fas fa-bars icon menu-icon"></i>
              <!-- <HiMenu class="icon menu-icon" /> -->
              Danh mục sản phẩm
              <i class="fas fa-chevron-down icon down-icon"></i>
              <!-- <HiChevronDown class="icon down-icon" /> -->
            </p>
          </a>
        </li>
        <li class="nav-right">
          <a href="../../index.php" class="nav-right-container">
            <p class="nav-text">Trang chủ</p>
          </a>
        </li>
        <li class="nav-right">
          <div href="#" class="nav-right-container">
            <div class="nav-text">
              <div>Giới thiệu</div>
              <i class="fas fa-chevron-down icon down-icon"></i>
            </div>
            <div class="sub-nav">
              <div class="introduce">
                <a href="../introduction" class="introduce-item">
                  <div class="sub-nav-content">Giới thiệu chung</div>
                </a>
              </div>
              <div class="introduce">
                <a href="../saleActivity" class="introduce-item">
                  <div class="sub-nav-content">Hoạt động kinh doanh</div>
                </a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-right">
          <a href="../contact" class="nav-right-container">
            <p class="nav-text">Liên hệ</p>
          </a>
        </li>
      </div>
    </div>


    <!-- main contact -->
    <div class="main-contact">
      <div class="contact">
        <div class="contact-header">Liên hệ</div>
        <div class="contact-body">
          <div class="contact-branch">
            <p>
              Hệ thống nhà sách Tiến Thọ:
              <br />
              <br />
              - Số 697 Giải Phóng - Hoàng Mai - Hà Nội. ĐT: 0243.6272120
              <br />
              <br />
              - Số 7&17, phố Đinh Lễ, Hà Nội: 0243.5746020
              <br />
              <br />
              - Phố sách 19/12 - Hai Bà Trưng - Hà Nội: 0775032000
              <br />
              <br />
              - Hầm B1 - Tòa nhà Artemis - Số 3 Lê Trọng Tấn - Thanh Xuân - Hà
              Nội
              <br />
              <br />
              - Tầng 2 Siêu thị VinMart 163 Đại La - Hà Nội: 0243.6272114
              <br />
              <br />
              - Hầm B1 - TTTM Mega Mall Times City - Hà Nội: 0243.2002444
              <br />
              <br />
              - Tầng 3 - TTTM Vincom Phan Văn Trị - Quận Gò Vấp - TP. Hồ Chí
              Minh: 02836368470
              <br />
              <br />
              - Tầng 3 Vincom Thái Nguyên - Thái Nguyên: 0208.3939008
              <br />
              <br />
              - Tầng 1 TTTM BigC Hạ Long - Khu Đô thị cột 5 - P.Hồng Hải - TP Hạ
              Long - Quảng Ninh: 0203.3831225
              <br />
              <br />
              - Số 350/31 Đường Lê Đức Thọ, Phường 6 - Quận Gò Vấp - TP. Hồ Chí
              Minh: 0961654298
              <br />
              <br />
              ----
              <br />
              Và hệ thống Nhà sách Tân Việt tại các Big C khu vực Miền Bắc và
              Miền Trung, Vinmart, MT Mart, Q Mart...
            </p>
          </div>
          <div class="contact-map">
            <img class="map" src="../../img/map.png" alt="map" />
          </div>
          <div class="contact-comment">
            <div class="comment-header">Viết nhận xét</div>
            <div class="comment-container">
              <div class="comment-content">
                Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và
                chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể.
              </div>
              <div class="comment-form" id="comment-form">
                <div class="comment-form-container" >
                  <input
                    type="text"
                    class="comment-input"
                    placeholder="Tên của bạn"
                    name="name"
                    id="name"
                  />
                  <span class="error-text" id="name-error"></span>
                </div>
                <div class="comment-form-container">
                  <input
                    type="text"
                    class="comment-input"
                    placeholder="Email của bạn"
                    name="email"
                    id="email"
                  />
                  <span class="error-text" id="email-error"></span>
                </div>
                <div class="comment-form-container">
                  <textarea
                    required
                    rows="6"
                    class="comment-input last"
                    placeholder="Viết bình luận"
                    id="comment"
                    name="comment"
                  >
                  </textarea>
                  <span class="error-text" id="comment-error"></span>
                </div>
                <div class="comment-form-controls">
                  <button class="btn">Gửi liên hệ</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="main-footer">
      <div class="footer">
        <div class="footer-header">
          <div class="footer-heading">
            <div class="footer-heading-container">
              <div class="footer-heading-a">
                <!-- <MdCall class="icon" /> -->
                <i class="fas fa-phone-alt icon"></i>
                <div class="footer-heading-h">Đặt hàng trực tuyến</div>
              </div>
              <div class="footer-heading-c">SĐT: 0987654321</div>
            </div>
          </div>
          <div class="footer-heading">
            <div class="footer-heading-container fl-l">
              <div class="footer-heading-a">
                <!-- <GoClock class="icon" /> -->
                <i class="far fa-clock icon"></i>
                <div class="footer-heading-h">Làm việc các ngày trong tuần</div>
              </div>
              <div class="footer-heading-c">Thứ 2 - Chủ Nhật</div>
              <div class="footer-heading-c">7h30 đến 22h30</div>
            </div>
          </div>
        </div>
        <div class="footer-container">
          <div class="footer-container-left">
            <div class="container">
              <div class="container-h">Sản phẩm</div>
              <a href="../index.html" class="container-items">Trang chủ</a>
              <a href="../introduction/" class="container-items">Giới thiệu</a>
              <a href="../contact/" class="container-items">Liên hệ</a>
            </div>
            <div class="container">
              <div class="container-h">Hỗ trợ</div>
              <a href="../introduction/" class="container-items">Giới thiệu chung</a>
              <a href="../saleActivity/" class="container-items">Hoạt động kinh doanh</a>
            </div>
            <div class="container">
              <div class="container-h">Kết nối với chúng tôi</div>
              <div class="container-items"></div>
            </div>
          </div>
          <div class="footer-container-right">
            <div class="phone-number">0987654321</div>
            <div class="time">Thứ 2 - Chủ Nhật</div>
            <div class="time">7h30 - 22h30</div>
            <div class="address">
              <FaMapMarkerAlt class="icon" />
              697 Giải Phóng - Hoàng Mai - Hà Nội
            </div>
            <div class="socials-contact">
              <div class="socials-items">
                <i class="fab fa-facebook-f social-icon"></i>
                <!-- <FaFacebookF class="social-icon" /> -->
              </div>
              <div class="socials-items">
                <i class="fab fa-google-plus-g social-icon"></i>
                <!-- <FaGooglePlusG class="social-icon" /> -->
              </div>
              <div class="socials-items">
                <i class="fab fa-pinterest-p social-icon"></i>
                <!-- <FaPinterest class="social-icon" /> -->
              </div>
              <div class="socials-items">
                <i class="fas fa-rss social-icon"></i>
                <!-- <FaRss class="social-icon" /> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div class="form-wrapper hide">
      <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-body">
          <div class="modal-inner">
            <!-- authen form --> 
            <div class="auth-form">
              <div class="out">
                <i class="fas fa-times"></i>
                <!-- <AiOutlineClose /> -->
              </div>
              <div class="auth-form__container">
                <div class="sign-in type">
                  <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                    <span class="auth-form__switch-btn">Đăng ký</span>
                  </div>
    
                  <div class="auth-form__content">
                    <div class="auth-form__form">
                      <div class="auth-form__group">
                        <input
                          type="text"
                          class="auth-form__input"
                          placeholder="Tên đăng nhập"
                        />
                      </div>
                      <div class="auth-form__group">
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
                  </div>
                </div>

                <div class="sign-up type">
                  <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng ký</h3>
                    <span class="auth-form__switch-btn">Đăng nhập</span>
                  </div>
    
                  <div class="auth-form__content">
                    <div class="auth-form__form">
                      <div class="auth-form__group">
                        <input
                          type="text"
                          class="auth-form__input"
                          placeholder="Tên đăng nhập"
                        />
                      </div>
                      <div class="auth-form__group">
                        <input
                          type="password"
                          class="auth-form__input"
                          placeholder="Mật khẩu"
                        />
                      </div>
                      <div class="auth-form__group">
                        <input
                          type="password"
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
                      <button class="btn">Đăng ký</button>
                    </div>
                  </div>
                </div>
              </div>
           
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
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./main.js"></script>

  </body>
</html>
