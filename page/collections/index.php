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
    <!-- <link rel="stylesheet" href="./collections.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    <?php include 'collections.css'; ?>
  </style>
  <body>
  <?php require("../../layout/header/index.php"); ?>

   <!-- collections -->
   <div class="collections">
    <div class="header">
      <div class="link-a">
        <a href="../index.html" class="header-link link">Trang chủ </a>/
          <a href="./index.html" class="header-link link"> Sách Khoa Học </a>/
          <p class="header-link">Khoa học Thiếu nhi</p>
      </div>
    </div>
    <div class="container">
      <div class="left">
        <div class="left-menu">
          <p class="menu-header">Danh mục</p>
          <li class="menu-items">
            <a href="../index.html">Trang chủ</a>
          </li>
          <li class="menu-items">
            <a href="../index.html">Nhà sách Tiến Thọ</a>
            <i class="fas fa-chevron-down icon down-icon"></i>

          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Thiếu nhi</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Văn học</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Tâm lý đời sống</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Khoa học</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Chính trị lịch sử</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="./index.html">Tham khảo</a>
          </li>
          <li class="menu-items">
            <a href="../introduction/">Giới thiệu</a>
            <i class="fas fa-chevron-down icon down-icon"></i>

          </li>
          <li class="menu-items sub-menu">
            <a href="../introduction/">Giới thiệu chung</a>
          </li>
          <li class="menu-items sub-menu">
            <a href="../saleActivity/">Hoạt động kinh doanh</a>
          </li>
          <li class="menu-items">
            <a href="../contact/">Liên hệ</a>
          </li>
        </div>
      </div>
      <div class="right">
        <div class="right-header">
          <p class="header-name">Sách khoa học</p>
        </div>
        <div class="right-container">
          <div class="book-book">
            <!-- book1 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book1.webp"
                    alt="mat_ngot_cho_tam_hon_tre_tho"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn trẻ thơ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">128.000đ</div>
                  <div class="cost">160.000đ</div>
                </div>
              </div>
            </div>
            <!-- book2 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book2.webp"
                    alt="mat_ngot_cho_tam_hon_thanh thieu nien"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Mật ngọt cho tâm hồn thanh thiếu niên
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">148.000đ</div>
                  <div class="cost">185.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 3 -->
            <div class="book-link">
              <div class="book-items" >
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book3.webp"
                    alt="mat_ngot_cho_tam_hon_phu_nu"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn phụ nữ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">108.000đ</div>
                  <div class="cost">135.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 4 -->
            <div class="book-link">
              <div class="book-items" >
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img src="../../img/book4.webp" alt="khong_phai_loi_cua_con" />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Giáo dục giới tính - Không phải lỗi của con
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">40.000đ</div>
                  <div class="cost">50.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 5 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book5.webp"
                    alt="cha_me_lam_gi_tao_hung_thu_cho_con"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Cha mẹ làm gì để tạo hứng thú cho con?
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">60.000đ</div>
                  <div class="cost">75.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 6 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book1.webp"
                    alt="mat_ngot_cho_tam_hon_tre_tho"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn trẻ thơ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">128.000đ</div>
                  <div class="cost">160.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 7 -->
            <div class="book-link">
              <div class="book-items" >
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book2.webp"
                    alt="mat_ngot_cho_tam_hon_thanh thieu nien"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Mật ngọt cho tâm hồn thanh thiếu niên
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">148.000đ</div>
                  <div class="cost">185.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 8 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book3.webp"
                    alt="mat_ngot_cho_tam_hon_phu_nu"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn phụ nữ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">108.000đ</div>
                  <div class="cost">135.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 5 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book5.webp"
                    alt="cha_me_lam_gi_tao_hung_thu_cho_con"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Cha mẹ làm gì để tạo hứng thú cho con?
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">60.000đ</div>
                  <div class="cost">75.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 6 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book1.webp"
                    alt="mat_ngot_cho_tam_hon_tre_tho"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn trẻ thơ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">128.000đ</div>
                  <div class="cost">160.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 7 -->
            <div class="book-link">
              <div class="book-items" >
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book2.webp"
                    alt="mat_ngot_cho_tam_hon_thanh thieu nien"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">
                    Mật ngọt cho tâm hồn thanh thiếu niên
                  </div>
                </a>
                <div class="book-price">
                  <div class="current-price">148.000đ</div>
                  <div class="cost">185.000đ</div>
                </div>
              </div>
            </div>
            <!-- book 8 -->
            <div class="book-link">
              <div class="book-items">
                <div class="book-sale-a">
                  <div class="book-sale">-20%</div>
                </div>
                <a href="../bookDetail" class="book-img">
                  <img
                    src="../../img/book3.webp"
                    alt="mat_ngot_cho_tam_hon_phu_nu"
                  />
                </a>
                <a href="../bookDetail" class="book-name-a">
                  <div class="book-name">Mật ngọt cho tâm hồn phụ nữ</div>
                </a>
                <div class="book-price">
                  <div class="current-price">108.000đ</div>
                  <div class="cost">135.000đ</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   <!-- end collections -->

   <?php require("../../layout/footer/index.php"); ?>
  </body>
</html>
