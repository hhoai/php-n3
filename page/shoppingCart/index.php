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
    <link rel="stylesheet" href="./shopping-cart.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- welcome -->
    <div class="welcome">
      <div class="welcome-container flex pl-8">
        <p class="welcome-left">Chào mừng bạn đến với nhà sách Tiến Thọ</p>
        <div class="welcome-log">
          <a class="bg-red signup" href="#"> Đăng ký </a>
          | <a class="login" href="#">Đăng nhập</a>
        </div>
        <div class="welcome-login hide">
          <a href="">Xin chào: User</a>
          | <a href="">Đăng xuất</a>
        </div>
      </div>
    </div>

    <!-- toolbar -->
    <div class="header-container">
      <div>
        <img class="logo" src="../../img/logo.png" alt="logo" />
      </div>

      <div class="search">
        <input
          type="search"
          onkeydown="handleChangeResult()"
          class="ip-search"
          placeholder="Tìm kiếm... "
        />
        <!-- <AiOutlineSearch class="fa-search" /> -->
        <button class="search-btn fas fa-search"></button>
      </div>

      <div class="hotline">
        <img class="img-hotline" src="../../img/hotline.webp" alt="hotline" />
        <div class="hotline-phoneNumber">
          <p class="hotline-text">Hotline:</p>
          <a class="hotline-tel" href="tel:0987654321">0987654321</a>
        </div>
      </div>

      <div class="shopping-cart">
        <a class="shopping-cart-container" href="./index.php">
          <!-- <FaShoppingCart class="fa-shopping-cart" /> -->
          <i class="fas fa-shopping-cart"></i>
          Giỏ hàng
        </a>
        <!-- <div class="notification">
      <div class="notification-message">
        Giỏ hàng của bạn đang trống
        <a class="red" href="./index.html">Tiếp tục mua hàng</a>
      </div>
    </div> -->
      </div>
    </div>

    <!-- navigation -->
    <div class="nav-header">
      <div class="nav-container">
        <li class="nav-left">
          <a href="../collections/" class="nav-left-container">
            <p class="fs-16">
              <i class="fas fa-bars icon menu-icon"></i>
              <!-- <HiMenu class="icon menu-icon" /> -->
              Danh mục sản phẩm
              <!-- <i class="fas fa-chevron-down icon down-icon"></i> -->
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
          <a href="./contact" class="nav-right-container">
            <p class="nav-text">Liên hệ</p>
          </a>
        </li>
      </div>
    </div>

    <!-- content -->
    <div class="cart">
      <div class="header">
        <div class="link-a">
          <a href="../index.html" class="header-link link">Trang chủ </a>/
          <p class="header-link">Giỏ hàng</p>
        </div>
      </div>
      <div class="empty-cart">
        <img
          src="https://bizweb.dktcdn.net/100/418/570/themes/935770/assets/cart_empty_background.png?1715260799692"
          alt="cart_empty_background"
        />
        <p class="empty-text">Giỏ hàng của bạn đang trống!</p>
        <a class="red" href="../index.html">Tiếp tục mua hàng</a>
      </div>
      <div class="cart-content hide">
        <div class="container">
          <p class="cart-header">Giỏ hàng</p>
          <table id="cart" class="table table-hover table-condensed">
            <thead>
              <tr>
                <th style="width: 50%">Tên sản phẩm</th>
                <th style="width: 10%">Giá</th>
                <th style="width: 8%">Số lượng</th>
                <th style="width: 22%" class="text-center">Thành tiền</th>
                <th style="width: 10%"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-th="Product">
                  <div class="row">
                    <div class="col-sm-2 hidden-xs">
                      <img
                        src="../../img/book1.webp"
                        alt="Sản phẩm 1"
                        class="img-responsive"
                        width="100"
                      />
                    </div>
                    <div class="col-sm-10">
                      <p class="nomargin">Mật ngọt cho tâm hồn trẻ thơ</p>
                    </div>
                  </div>
                </td>
                <td data-th="Price">200.000 đ</td>
                <td data-th="Quantity">
                  <input
                    class="form-control text-center"
                    value="1"
                    type="number"
                  />
                </td>
                <td data-th="Subtotal" class="text-center">200.000 đ</td>
                <td class="actions" data-th="">
                  <button class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash-o"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td data-th="Product">
                  <div class="row">
                    <div class="col-sm-2 hidden-xs">
                      <img
                        src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg"
                        alt="Sản phẩm 1"
                        class="img-responsive"
                        width="100"
                      />
                    </div>
                    <div class="col-sm-10">
                      <h4 class="nomargin">Sản phẩm 2</h4>
                      <p>Mô tả của sản phẩm 2</p>
                    </div>
                  </div>
                </td>
                <td data-th="Price">300.000 đ</td>
                <td data-th="Quantity">
                  <input
                    class="form-control text-center"
                    value="1"
                    type="number"
                  />
                </td>
                <td data-th="Subtotal" class="text-center">300.000 đ</td>
                <td class="actions" data-th="">
                  <button class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash-o"></i>
                  </button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="visible-xs">
                <td class="text-center"><strong>Tổng 200.000 đ</strong></td>
              </tr>
              <tr>
                <td>
                  <a href="http://hocwebgiare.com/" class="btn btn-warning"
                    ><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a
                  >
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center">
                  <strong>Tổng tiền 500.000 đ</strong>
                </td>
                <td>
                  <a
                    href="http://hocwebgiare.com/"
                    class="btn btn-success btn-block"
                    >Thanh toán <i class="fa fa-angle-right"></i
                  ></a>
                </td>
              </tr>
            </tfoot>
          </table>
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
              <a href="../introduction/" class="container-items"
                >Giới thiệu chung</a
              >
              <a href="../saleActivity/" class="container-items"
                >Hoạt động kinh doanh</a
              >
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
              <a class="socials-items" href="./admin/">
                <i class="fas fa-rss social-icon"></i>
                <!-- <FaRss class="social-icon" /> -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <!-- sign in -->
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
