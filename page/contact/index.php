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
  <?php require("../../layout/header/index.php"); ?>  
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
    <?php require("../../layout/footer/index.php"); ?>
  </body>
</html>
