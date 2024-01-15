<footer class="footer-area section-padding-50-0">
  <div class="container-fluid">
    <div class="row justify-content-between">

      <!-- Single Footer Widget -->
      <div class="col-12 col-sm-6 col-md-3 pb-5">
        <div class="single-footer-widget">
          <!-- Footer Logo -->
          <a href="." class="footer-logo"><img src="img/core-img/logo.png" alt="Innovation Tech Pro"></a>
        </div>
      </div>

      <!-- Single Footer Widget -->
      <div class="col-12 col-md-9 col-lg-8 col-xl-7">
        <div class="row">
          <!-- Single Footer Widget -->
          <div class="col-sm-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title"><?php echo $_SESSION["lang"] == "en" ? "Address" : "ที่ตั้งบริษัท" ?></h5>
              <p>
                <a href="https://maps.app.goo.gl/sCjAFGLsEWkMtq1G6" target="_blank"><?php echo $_SESSION["lang"] == "en" ? "279/170 Moo 3, Bo Win<br>Si Racha, Chonburi 20230 Thailand" : "279/170 หมู่ที่ 3 ตำบลบ่อวิน อำเภอศรีราชา จังหวัดชลบุรี 20230" ?></a>
              </p>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-sm-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title"><?php echo $_SESSION["lang"] == "en" ? "Contacts" : "เบอร์ติดต่อ" ?></h5>
              <p>
                <i class="fa fa-phone"></i>
                <a href="tel:081-839-3078"><?php echo $_SESSION["lang"] == "en" ? "(66)8 1839 3078" : "081-839-3078" ?></a>
              </p>
              <br>
              <p>
                <i class="fa fa-phone"></i>
                <a href="tel:065-934-4281"><?php echo $_SESSION["lang"] == "en" ? "(66)6 5934 4281" : "065-934-4281" ?></a>
              </p>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class=" col-sm-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title"><?php echo $_SESSION["lang"] == "en" ? "Social" : "ติดตามเรา" ?></h5>
              <div class="footer-social-info">
                <?php include 'social-info.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Copywrite Area -->
  <div class="copywrite-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="copywrite-content">
            <!-- Copywrite Text -->
            <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <?php
              if ($_SESSION["lang"] == "en") { ?>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | Innovation Tech Pro Co., <a href="./innopanel" style="all: unset;" target="_blank">Ltd.</a>
              <?php } else { ?>
                สงวนลิขสิทธิ์ &copy;
                <script>
                  document.write(new Date().getFullYear() + 543);
                </script>
                บริษัท อินโนเวชั่น เทค โปร <a href="./innopanel" style="all: unset;" target="_blank">จำกัด</a>
              <?php } ?>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <p class="copywrite-text">Free Images from on <a href="https://www.freepik.com/search?format=search&last_filter=selection&last_value=1&selection=1&type=vector" class="small" target="_blank">Freepik</a> and <a href="https://unsplash.com/" class="small" target="_blank">unsplash</a></p>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <nav class="footer-nav">
            <ul>
              <li><a href="."><?php echo $_SESSION["lang"] == "en" ? "Home" : "หน้าหลัก" ?></a></li>
              <!-- <li><a href="#">About us</a></li> -->
              <li><a href="mission.php"><?php echo $_SESSION["lang"] == "en" ? "Mission" : "ภารกิจ" ?></a></li>
              <li><a href="services.php"><?php echo $_SESSION["lang"] == "en" ? "Services" : "บริการ" ?></a></li>
              <!-- <li><a href="#">Portfolio</a></li> -->
              <li><a href="contact.php"><?php echo $_SESSION["lang"] == "en" ? "Contact" : "ติดต่อเรา" ?></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>