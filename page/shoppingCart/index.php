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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    <?php include 'shopping-cart.css'; ?>
  </style>
  <body>
    <!-- welcome -->
    <div class="welcome">
      <div class="welcome-container flex pl-8">
        <p class="welcome-left">Chào mừng bạn đến với nhà sách Tiến Thọ</p>
        <div class="welcome-log">
          <?php 
            $islogin = true;
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
        <input
          type="search"
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
          <a href="../../index.html" class="header-link link">Trang chủ </a>/
          <p class="header-link">Giỏ hàng</p>
        </div>
      </div>
      <?php 
        $isEmptyCart = false;
        if(!$islogin || $isEmptyCart) {
          ?>
           <div class="empty-cart">
            <img
              src="https://bizweb.dktcdn.net/100/418/570/themes/935770/assets/cart_empty_background.png?1715260799692"
              alt="cart_empty_background"
            />
            <p class="empty-text">Giỏ hàng của bạn đang trống!</p>
            <a class="red" href="../index.html">Tiếp tục mua hàng</a>
          </div>
          <?php
        } else {
          ?> 
          <div class="cart-container">
            <div class="cart-content">
              <p class="cart-header">Giỏ hàng</p>
              <form action="" method="post" style="width:fit-content;">
                <table class="product">
                  <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="product-name">
                      <img class="product-img" src="../../img/book1.webp" alt="mat_ngot_cho_tam_hon_tre_tho">
                      <apan>Mật ngọt cho tâm hồn trẻ thơ</apan>
                    </td>
                    <td class="quantity">
                      <input type="number" name="quantity0" class="quantity-ip" value="2" min="1"/>
                    </td>
                    <td class="price">
                      128000 VND
                    </td>
                    <td class="price">
                      256000 VND
                    </td>
                    <td class="setting">
                      <div class="tooltip delete">
                        <i class="fas fa-trash-alt"></i>
                        <span class="tooltiptext">Xóa</span>
                      </div>
                      <div class="tooltip edit">
                        <i class="fas fa-pen"></i>
                        <span class="tooltiptext">Lưu số lượng</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="product-name">
                      <img class="product-img" src="../../img/book2.webp" alt="mat_ngot_cho_tam_hon_thanh_thieu_nien">
                      <span>Mật ngọt cho tâm hồn thanh thiếu niên</span>
                    </td>
                    <td class="quantity">
                      <input type="number" name="quantity1" class="quantity-ip" value="1" min="1"/>
                    </td>
                    <td class="price">
                      150000 VND
                    </td>
                    <td class="price">
                      15000 VND
                    </td>
                    <td class="setting">
                    <div class="tooltip delete">
                        <i class="fas fa-trash-alt"></i>
                        <span class="tooltiptext">Xóa</span>
                      </div>
                      <div class="tooltip edit">
                        <i class="fas fa-pen"></i>
                        <span class="tooltiptext">Lưu số lượng</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="total-text" colspan="4">Tổng tiền: </td>
                    <td class="total-number" colspan="2">
                      <input type="text" name="total" class="tong" value="406000 VND">
                    </td>
                  </tr>
                </table>
                <div class="payment">
                  <a href="../payment" class="payment-btn">Thanh toán</a>
                </div>
              </form>
            </div>
          </div>
          <?php
        }  
      ?>
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

    
  </body>
</html>
