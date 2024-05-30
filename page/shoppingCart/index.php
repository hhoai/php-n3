<?php 
  session_start();
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
    
  <?php require("../../layout/header/index.php"); ?>  

    <!-- content -->
    <div class="cart">
      <div class="header">
        <div class="link-a">
          <a href="../../index.html" class="header-link link">Trang chủ </a>/
          <p class="header-link">Giỏ hàng</p>
        </div>
      </div>
      <?php 
        $login = $_SESSION['login'];
      
        $isEmptyCart = true;
        if ($login) {
          if ($isEmptyCart) {
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
          else { 
            ?>
            <div class="empty-cart">
              <img
              src="https://bizweb.dktcdn.net/100/418/570/themes/935770/assets/cart_empty_background.png?1715260799692"
              alt="cart_empty_background"
              />
              <p class="empty-text">Giỏ hàng của bạn đang trống!</p>
              <a class="red" style="color:red;" href="../../index.php">Tiếp tục mua hàng</a>
            </div>
            <?php
          } 
        }
        else { 
          ?>
          <div class="empty-cart">
            <img
            src="https://bizweb.dktcdn.net/100/418/570/themes/935770/assets/cart_empty_background.png?1715260799692"
            alt="cart_empty_background"
            />
            <p class="empty-text">Giỏ hàng của bạn đang trống!</p>
            <a class="red" style="color:red;" href="../../index.php">Tiếp tục mua hàng</a>
          </div>
          <?php
        } 
      ?>
    </div>
  <?php require("../../layout/footer/index.php"); ?>
  </body>
</html>
