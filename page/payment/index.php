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
    <!-- <link rel="stylesheet" href="./shopping-cart.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    <?php include 'payment.css'; ?>
  </style>
  <body> 
    <?php require("../../layout/header/index.php"); ?>  
    
    <!-- content -->
    <div class="cart">
      <div class="header">
        <div class="link-a">
          <a href="../../index.html" class="header-link link">Trang chủ </a>/
          <a href="../shoppingCart" class="header-link link">Giỏ hàng </a>/
          <p class="header-link">Thanh toán</p>
        </div>
      </div>
      <div class="cart-container">
        <div class="cart-content">
          <div class="payment-container">
            <p class="cart-header">Thanh toán</p>
            <div class="payment-content">
              <div class="customer">
                <p class="customer-header">Thông tin khách hàng</p>
                <div class="customer-content">
                  <p class="lable">Họ tên khách hàng</p>
                  <input class="ip-inf" type="text" name="username" placeholder="Họ tên" required>
                  <p class="lable">Địa chỉ</p>
                  <input class="ip-inf" type="text" name="address" placeholder="Địa chỉ" required>
                  <p class="lable">Email</p>
                  <input class="ip-inf" type="email" name="email" placeholder="Email" required>
                  <p class="lable">Số điện thoại</p>
                  <input class="ip-inf" type="text" name="phonenumber" placeholder="Số điện thoại" required>
                  <p class="lable">Ghi chú</p>
                  <textarea class="ip-inf" type="text" name="note" placeholder="Ghi chú ..."></textarea>
                  <p class="lable">Phương thức thanh toán</p>
                  <div class="payment-method">
                    <div class="output">
                      <input type="radio" name="payment" checked>
                      <span>Thanh toán trực tuyến</span>
                    </div>
                    <div class="output">
                      <input type="radio" name="payment">
                      <span>Thanh toán khi nhận hàng</span>
                    </div>
                  </div>
                  <p class="lable">Xuất hóa đơn</p>
                  <div class="payment-method">
                    <div class="output">
                      <input type="radio" name="pdf" placeholder="Có" checked>
                      <span>Có</span>
                    </div>
                    <div class="output">
                      <input type="radio" name="pdf" placeholder="Không">
                      <span>Không</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-information">
                <p class="product-header">Thông tin đơn hàng</p>
                <table class="product">
                  <tr>
                    <th>STT</th>
                    <th colspan="2">Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="product-name">
                      <img class="product-img" src="../../img/book1.webp" alt="mat_ngot_cho_tam_hon_tre_tho">
                    </td>
                    <td class="name">
                      <span>Mật ngọt cho tâm hồn trẻ thơ</span>
                    </td>
                    <td class="quantity">
                      2
                    </td>
                    <td class="price">
                      128000 VND
                    </td>
                    <td class="price">
                      256000 VND
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="product-name">
                      <img class="product-img" src="../../img/book2.webp" alt="mat_ngot_cho_tam_hon_thanh_thieu_nien">
                    </td>
                    <td class="name">
                      <span>Mật ngọt cho tâm hồn thanh thiếu niên</span>
                    </td>
                    <td class="quantity">
                      1
                    </td>
                    <td class="price">
                      150000 VND
                    </td>
                    <td class="price">
                      15000 VND
                    </td>
                  </tr>
                  <tr>
                    <td class="total-text" colspan="4">Tổng thanh toán: </td>
                    <td class="total-number" colspan="2">
                      <input type="text" name="total" class="tong" value="406000 VND">
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="payment">
              <button class="payment-btn">Thanh toán</button>
            </div>
          </div>
          <div class="successful hide">
            <img class="icon" src="../../img/success.svg" alt="successful">
            <p class="success">Đặt hàng thành công!</p>
            <p class="contact">Chúng tôi sẽ liên hệ Quý khách để xác nhận đơn hàng trong thời gian ngắn nhất!</p>
            <a class="home" href="../../index.php">Về trang chủ</a>
          </div>
        </div>
      </div>    
    </div>

    <?php require("../../layout/footer/index.php"); ?>
    
    <script src="main.js"></script>
  </body>
</html>
