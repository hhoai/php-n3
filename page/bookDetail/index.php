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
    <!-- <link rel="stylesheet" href="./book-detail.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head> 
  <style>
    <?php include 'book-detail.css'; ?>
  </style>
  <body>
    <?php require("../../layout/header/index.php"); ?>  

    <div class="book-detail">
      <div class="header">
        <div class="link-a">
          <a href="../../index.php" class="header-link link">Trang chủ </a>/
          <a href="../../page/collections/" class="header-link link">
            Khoa học thiếu nhi </a
          >/
          <p class="header-link">Mật Ngọt Cho Tâm Hồn Trẻ Thơ</p>
        </div>
      </div>
      <div class="container">
        <div class="content">
          <div class="book-img">
            <img src="../../img/book1.webp" alt="mat_ngot_cho_tam_hon_tre_tho" />
            <div class="sale">Sale 20%</div>
          </div>
          <div class="product">
            <div class="product-title">
              <div class="name">Mật Ngọt Cho Tâm Hồn Trẻ Thơ</div>
              <div class="social-actions">
                <a class="like">
                  <i class="far fa-thumbs-up"></i>
                  <div>Thích : 10</div>
                </a>
                <a class="share">
                  <i class="fas fa-share"></i>
                  <div>Chia sẻ</div>
                </a>
              </div>
              <div class="producer">
                <div class="producer-content">
                  <p>
                    Nhà sản xuất:
                    <a href="https://nxbdantri.com.vn/" class="producer-link"
                      >NXB Dân Trí</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="product-details">
              <ul class="keys">
                <li class="key-items">Giá bán:</li>
                <li class="key-items">Tiết kiệm:</li>
                <li class="key-items">Giá thị trường:</li>
              </ul>
              <div class="values">
                <div class="value-items current-price">
                  <p>128,000đ</p>
                  (Đã bao gồm VAT)
                </div>
                <div class="value-items">32,000đ</div>
                <div class="value-items">160,000đ</div>
              </div>
            </div>
            <div class="select">
              <div class="quantity-box">
                <p class="">Số lượng</p>
                <div class="input">
                  <input
                    type="button"
                    name="minus"
                    class="button qtyminus"
                    value="-"
                  />
                  <input
                    type="text"
                    name=""
                    value="1"
                    min="1"
                    id=""
                    class="selector"
                  />
                  <input
                    type="button"
                    name="plus"
                    class="button qtyplus"
                    value="+"
                  />
                </div>
              </div>
            </div>
            <div class="product-button">
              <div class="product-a">
                <div class="button add-to-cart">
                  <p class="uppercase">Thêm vào giỏ</p>
                  <p class="">Thêm sản phẩm vào giỏ hàng</p>
                </div>
                <div class="text">
                  <p>
                    <i class="fas fa-check-circle"></i>
                    Gọi mua hàng
                    <a href="tel:0987654321" class="phone-number">0987654321</a>
                  </p>
                  <p>
                    <i class="fas fa-check-circle"></i>
                    Giao hàng toàn quốc
                  </p>
                </div>
              </div>
              <div class="product-a">
                <div class="button buy-now">
                  <p class="uppercase">Mua ngay</p>
                  <p class="">Mua online giao hàng tận nơi</p>
                </div>
                <div class="text">
                  <p>
                    <i class="fas fa-check-circle"></i>
                    Thanh toán bằng hình thức chuyển khoản trước
                  </p>
                  <p>
                    <i class="fas fa-check-circle"></i>
                    Phí ship có thể phát sinh theo cân nặng hàng hóa
                  </p>
                  <a href="#" class="direct">
                    <i class="fas fa-shopping-cart"></i>
                    Hướng dẫn mua hàng
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- detail -->
    <div class="product-al">
      <div class="detail">
        <div class="left">
          <div class="new-books">
            <div class="header">Sản phẩm mới</div>
            <div class="container">
              <div class="items">
                <a href="../../page/bookDetail/">
                  <img
                    class="book-img"
                    src="../../img/book7.webp"
                    alt="khong_phai_loi_cua_con"
                  />
                </a>
                <div class="text">
                  <a href="../../page/bookDetail/" class="book-name-a">
                    <div class="book-name">Dạy con đọc sách</div>
                  </a>
                  <div class="book-price">
                    <div class="current-price">128.000đ</div>
                    <div class="cost">160.000đ</div>
                  </div>
                </div>
              </div>
              <div class="items">
                <a href="../../page/bookDetail/">
                  <img
                    class="book-img"
                    src="../../img/book6.webp"
                    alt="cha_me_lam_gi_tao_hung_thu_cho_con"
                  />
                </a>
                <div class="text">
                  <a href="../../page/bookDetail/" class="book-name-a">
                    <div class="book-name">Tri thức là sức mạnh</div>
                  </a>
                  <div class="book-price">
                    <div class="current-price">140.000đ</div>
                    <div class="cost">175.000đ</div>
                  </div>
                </div>
              </div>
              <div class="items">
                <a href="../../page/bookDetail/">
                  <img
                    class="book-img"
                    src="../../img/book3.webp"
                    alt="mat_ngot_cho_tam_hon_phu_nu"
                  />
                </a>
                <div class="text">
                  <a href="../../page/bookDetail/" class="book-name-a">
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
          <div class="banner">
            <img
              src="../../img/left_image_ad_1.jpg"
              alt="left_ad"
              class="banner-ad"
            />
            <img
              src="../../img/left_image_ad_2.jpg"
              alt="left_ad"
              class="banner-ad"
            />
          </div>
        </div>
        <div class="right">
          <div class="describe-book">
            <div class="describe-header">Mô tả sản phẩm</div>
            <div class="line">
              <hr class="cl-t"/>
            </div>
            <div class="describe-content">
              <div class="">Những cuốn sách hay sẽ mở ra cánh cửa bước vào một thế giới rộng
              lớn hơn, đầy ắp những điều kì thú, đẹp đẽ, hân hoan và phiêu lưu.
              Không những thế, chúng còn phải mang lại những tác động đích thực
              về mặt tinh thần, chứ không chỉ là niềm vui trí tuệ. Chúng giúp
              các em biết mình phải tìm kiếm điều gì trong cuộc sống. Đọc sách
              giúp phát triển tâm trí vì trẻ học cách thưởng thức những gì được
              nhìn thấy, nghe thấy, trải nghiệm và đưa chúng vào thực tế sau
              này. Những điều xa lạ đều trở nên gần gũi, sống động trên trang
              sách. Bên cạnh đó, những điều lố bịch trên trang sách giúp trẻ
              thấy được khía cạnh thú vị, tích cực trong cuộc sống của chính
              mình. Sự thấu hiểu, cảm thông cũng được sinh ra từ quá trình trẻ
              chia sẻ cảm xúc với các câu chuyện, hay đặt bản thân vào vị trí
              của người khác. Sách không thể thay thế cuộc sống, nhưng một niềm
              vui thích sẽ được nảy mầm từ sách.
              </div>
              <div class="">
              Tuy nhiên, con trẻ không thể tự mình chọn được những cuốn sách
              hay, mà cần được bố mẹ giúp đỡ. Trong cuốn sách này, tác giả
              Gladys Hunt và Mark Hunt thảo luận mọi điều, từ cách chọn những
              cuốn sách hay cho con trẻ tới việc khuyến khích con trẻ ham mê đọc
              sách.
              </div>
              <div class="">
              Được minh họa bằng hình vẽ từ nhiều cuốn sách được trẻ em yêu
              thích,
              <span class="bold italic cl-t">
              Mật ngọt cho tâm hồn trẻ thơ </span>
              còn được mở rộng, bao gồm danh sách sách cập nhật không chỉ phù
              hợp với lứa tuổi của con bạn, mà còn liệt kê gần 1.000 cuốn sách
              được yêu thích trong nhiều năm, tác phẩm kinh điển, sách mới tuyệt
              vời, thậm chí cả sách nói, làm phong phú thêm cuộc sống của con
              bạn. Bạn sẽ có cơ hội hiểu được tầm quan trọng của một gia đình
              ham đọc sách và cùng nhau tận hưởng các cuốn sách bằng cách đọc to
              thành tiếng; giúp trẻ có một cái nhìn rộng lớn hơn về thế giới, sự
              thật và sự tử tế; khuyến khích trí tưởng tượng và cách sử dụng
              ngôn từ ở trẻ; tìm thấy những cuốn sách hay nhất cho con bạn.
            </div>
            <div class="">
              <span class="cl-b">Hàng nghìn bậc cha mẹ đã sử dụng cuốn sách này để làm phong phú
              thêm đời sống văn hóa tinh thần của gia đình, cũng như con cái họ.
              Bạn và gia đình mình chắc chắn cũng sẽ tìm thấy những điều thú vị
              và bổ ích trong</span>
              <span class="bold italic cl-t">
                Mật ngọt cho tâm hồn trẻ thơ.</span>
              </div>
              <div class="">
              <span class="bold cl-t">Giới thiệu tác giả:</span> 
            </div>
            <div class="">
              <span class="cl-b">
                <span class="bold">Gladys Hunt</span> là một tác giả và
                diễn giả nổi tiếng. Bà đã ra mắt hơn 20 tựa sách. Cùng với
                chồng, bà đã làm việc với tổ chức giáo dục InterVarsity
                Christian Fellowship trong nhiều năm. Bà mất vào năm 2010.
              </span>
            </div>
            <div class="">
              <span class="cl-b">
                <span span class="bold"> Mark Hunt </span>lớn lên giữa vô
                vàn cuốn sách. Ông đã đọc nhiều sách hơn số sách mà mình có thể
                đếm với các con và hiện tại vẫn tiếp tục đọc sách với các cháu
                (và bất kì ai khác muốn nghe ông đọc). Mark từng làm việc trong
                lĩnh vực xuất bản trong 30 năm, với tư cách là một biên tập viên
                và tác giả sách. Gần đây, ông là giám đốc điều hành quốc tế của
                Langham Partnership.
              </span>
            </div>
            </div>
          </div>
          <div class="other-books">
            <div class="other-book-header">
              Sản phẩm khác
            </div>
            <div class="line">
              <hr>
            </div>
            <div class="book-container">
              <div class="book-book">
                <!-- book1 -->
                <div class="book-link">
                  <div class="book-items">
                    <div class="book-sale-a">
                      <div class="book-sale">-20%</div>
                    </div>
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book1.webp"
                        alt="mat_ngot_cho_tam_hon_tre_tho"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book2.webp"
                        alt="mat_ngot_cho_tam_hon_thanh thieu nien"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book3.webp"
                        alt="mat_ngot_cho_tam_hon_phu_nu"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img src="../../img/book4.webp" alt="khong_phai_loi_cua_con" />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book5.webp"
                        alt="cha_me_lam_gi_tao_hung_thu_cho_con"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book1.webp"
                        alt="mat_ngot_cho_tam_hon_tre_tho"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book2.webp"
                        alt="mat_ngot_cho_tam_hon_thanh thieu nien"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
                    <a href="../../page/bookDetail/" class="book-img">
                      <img
                        src="../../img/book3.webp"
                        alt="mat_ngot_cho_tam_hon_phu_nu"
                      />
                    </a>
                    <a href="../../page/bookDetail/" class="book-name-a">
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
    </div>

  <?php require("../../layout/footer/index.php"); ?>

  </body>
</html>
