<section class="contact-area section-padding-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Section Heading -->
        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
          <h2><?php echo $_SESSION["lang"] == "en" ? "We'd love to hear from you." : "ส่งข้อความหาเราได้เสมอ" ?></h2>
          <picture>
            <source srcset="img/core-img/logo-s.webp" type="image/webp">
            <source srcset="img/core-img/logo-s.png" type="image/png">
            <img src="img/core-img/logo-s.png" alt="Innovation Tech Pro">
          </picture>
        </div>
      </div>
    </div>


    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <!-- Contact Form -->
        <div class="contact-form-area text-center">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php
            $StrGetRecipient  = "SELECT dept_name, list_rcpt FROM recipientlist WHERE status = 1 ORDER BY 1;";
            $RecGetRecipient  = $Knot->query($StrGetRecipient);
            if ($RecGetRecipient->num_rows == 0) {
              echo "<input type='text' name='recipient' class='form-control wow fadeInUp' data-wow-delay='50ms' placeholder='" . ($_SESSION["lang"] == "en" ? "Recipient email" : "อีเมลผู้รับ") . "' required>";
            } else {
              echo "<select name='recipient' class='form-control wow fadeInUp mb-5' data-wow-delay='50ms' required>";
              echo "  <option value=''>" . ($_SESSION["lang"] == "en" ? "Please choose a recipient..." : "เลือกอีเมลผู้รับ...") . "</option>";
              while ($ObjGetRecipient = mysqli_fetch_assoc($RecGetRecipient)) {
                echo "<option value='{$ObjGetRecipient["email"]}'>{$ObjGetRecipient["email"]}</option>";
              }
              echo "</select>";
            }
            ?>
            <input type="text" name="sender" class="form-control wow fadeInUp" data-wow-delay="100ms" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Sender name" : "ชื่อผู้ติดต่อ" ?>" required>
            <input type="text" name="phone" class="form-control wow fadeInUp" data-wow-delay="100ms" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Contact number" : "เบอร์ติดต่อกลับ" ?>" required>
            <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="300ms" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Email sender" : "อีเมล" ?>" required>
            <input type="text" name="subject" class="form-control wow fadeInUp" data-wow-delay="500ms" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Subject" : "เรื่องที่ต้องการติดต่อ" ?>" required>
            <textarea name="message" class="form-control wow fadeInUp" data-wow-delay="700ms" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Message" : "ข้อความ" ?>"></textarea required>
            <div class="col-12 d-flex justify-content-center pb-3">
              <div class="g-recaptcha" data-sitekey="6LffdFooAAAAAIzHsOVts351lXw1RE-s3kn7l46-"></div>
            </div>
            <button type="submit" id="form-submit" name="form-submit" class="btn pixel-btn wow fadeInUp" data-wow-delay="900ms"><?php echo $_SESSION["lang"] == "en" ? "Send Message" : "ส่งข้อความ" ?></button>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>