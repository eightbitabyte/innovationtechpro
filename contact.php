<?php
include 'inc/prerequisite.php';

// mail() process
if (isset($_REQUEST['form-submit'])) {
    $recipient  = htmlspecialchars($_POST["recipient"]);
    $sender     = htmlspecialchars($_POST["sender"]);
    $phone      = htmlspecialchars($_POST["phone"]);
    $email      = htmlspecialchars($_POST["email"]);
    $subject    = htmlspecialchars($_POST["subject"]);
    $message    = htmlspecialchars($_POST["message"]);

    $contentmsg = " <html>
                    <head>
                        <title>Message from Innovation Tech Pro <strong style='color:red;'>Contact Page</strong></title>
                        <meta http-equiv='content-type' content='text/html;charset=UTF-8'>
                    </head>
                    <body>
                        <p>Message from Innovation Tech Pro <strong style='color:red;'>Contact Page</strong>.</p>
                        <table width='90%' border='1' cellpadding='3' cellspacing='3'>
                            <tbody>
                                <tr>
                                    <td align='center'>Date/Time: </td><td>" . date("d F Y H:i:s") . "</td>
                                </tr>
                                <tr>
                                    <td align='center'>From: </td><td>" . $sender . "</td>
                                </tr>
                                <tr>
                                    <td align='center'>Phone: </td><td>" . $phone . "</td>
                                </tr>
                                <tr>
                                    <td align='center'>Email: </td><td>" . $email . "</td>
                                </tr>
                                <tr>
                                    <td align='center'>Subject: </td><td>" . $subject . "</td>
                                </tr>
                                <tr>
                                    <td align='center'>Message: </td><td>" . $message . "</td>
                                </tr>
                            </tbody>
                        </table>
                    </body>
                    </html>";

    // Always set content-type when sending HTML email
    $headers     = "MIME-Version: 1.0" . "\r\n";
    $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers    .= "From: {$email}" . "\r\n";
    $headers    .= "CC: smart-merchant@live.com" . "\r\n";

    mail($recipient, $subject, $contentmsg, $headers);

    echo "<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <script language='javascript' type='text/javascript'>
            window.alert('Your message has been sent.');
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include_once 'inc/head-zone.php'; ?>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include_once 'inc/header-area.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/contact.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo $_SESSION["lang"] == "en" ? "Contact" : "ติดต่อเรา" ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124355.65376831325!2d100.74242519726562!3d13.09194950000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b979e6765111%3A0xe47ab5fb0596dc28!2sInnovation%20Tech%20Pro!5e0!3m2!1sen!2sth!4v1695613579692!5m2!1sen!2sth" allowfullscreen></iframe>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <!-- Contact Content -->
                    <div class="contact-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2><?php echo $_SESSION["lang"] == "en" ? "Where?" : "ที่ไหน?" ?></h2>
                            <h6><?php echo $_SESSION["lang"] == "en" ? "Our Address" : "สำนักงานตั้งอยู่ที่นี่" ?></h6>
                        </div>

                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex">
                            <div class="icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h6><?php echo $_SESSION["lang"] == "en" ? "Address" : "ที่ตั้งสำนักงาน" ?></h6>
                                <p><a href="https://www.google.com/maps/place/Innovation+Tech+Pro/@13.0287064,101.0594862,17z/data=!3m1!4b1!4m6!3m5!1s0x3102b979e6765111:0xe47ab5fb0596dc28!8m2!3d13.0287064!4d101.0620611!16s%2Fg%2F11vf04my7q?entry=ttu" target="_blank" class="small"><?php echo $_SESSION["lang"] == "en" ? "279/170 Moo 3, Bo Win<br>Si Racha, Chonburi 20230 Thailand" : "279/170 หมู่ที่ 3 ตำบลบ่อวิน อำเภอศรีราชา จังหวัดชลบุรี 20230" ?></a></p>
                            </div>
                        </div>

                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="text">
                                <h6><?php echo $_SESSION["lang"] == "en" ? "Email" : "อีเมล" ?></h6>
                                <p>
                                    <a href="mailto:prayong.pa@innovationtechpro.com" class="small">prayong.pa@innovationtechpro.com</a>
                                    <br>
                                    <a href="mailto:luksanawadee.th@innovationtechpro.com" class="small">luksanawadee.th@innovationtechpro.com</a>
                                </p>
                            </div>
                        </div>

                        <!-- Single Contact Content -->
                        <div class=" single-contact-content d-flex">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text">
                                <?php if ($_SESSION["lang"] == "en") { ?>
                                    <h6>Phone</h6>
                                    <p>
                                        <a href="tel:66818393078" class="small">(66)8 1839 3078</a>
                                        <br>
                                        <a href="tel:66659344281" class="small">(66)6 5934 4281</a>
                                    </p>
                                <?php } else { ?>
                                    <h6>เบอร์ติดต่อ</h6>
                                    <p>
                                        <a href="tel:0818393078" class="small">081-839-3078</a>
                                        <br>
                                        <a href="tel:0659344281" class="small">065-934-4281</a>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class=" col-12 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2><?php echo $_SESSION["lang"] == "en" ? "Get In Touch" : "สอบถามรายละเอียดเพิ่มเติม" ?></h2>
                        <h6><?php echo $_SESSION["lang"] == "en" ? "Leave us a message, we will get back to you as soon as possible." : "ทีมงานจะติดต่อกลับหาท่านโดยเร็วที่สุด" ?></h6>
                    </div>
                    <!-- Contact Form -->
                    <div class="contact-form-area mb-100">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                            <?php
                            $StrGetRecipient    = "SELECT dept_name, list_rcpt FROM recipientlist WHERE status = 1 ORDER BY 1;";
                            $RecGetRecipient    = $Knot->query($StrGetRecipient);
                            if ($RecGetRecipient->num_rows == 0) {
                                echo "<input type='text' name='recipient' class='form-control' placeholder='" . ($_SESSION["lang"] == "en" ? "Recipient email" : "อีเมลผู้รับ") . "' required>";
                            } else {
                                echo "<select name='recipient' id='recipient' class='form-control mb-5' required>";
                                echo "  <option value=''>" . ($_SESSION["lang"] == "en" ? "Please choose department to contact..." : "กรุณาเลือกแผนกผู้รับ...") . "</option>";
                                while ($ObjGetRecipient = mysqli_fetch_assoc($RecGetRecipient)) {
                                    echo "<option value='{$ObjGetRecipient["list_rcpt"]}'>{$ObjGetRecipient["dept_name"]}</option>";
                                }
                                echo "</select>";
                            }
                            ?>
                            <input type="text" name="sender" class="form-control" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Sender name" : "ชื่อผู้ติดต่อ" ?>" required>
                            <input type="text" name="phone" class="form-control" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Contact number" : "เบอร์ติดต่อกลับ" ?>" required>
                            <input type="email" name="email" class="form-control" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Email sender" : "อีเมลผู้ส่ง" ?>" required>
                            <input type="text" name="subject" class="form-control" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Subject" : "เรื่องที่ต้องการติดต่อ" ?>" required>
                            <textarea name="message" class="form-control" placeholder="<?php echo $_SESSION["lang"] == "en" ? "Message" : "ข้อความ" ?>"></textarea required>
                            <div class="g-recaptcha pb-3" data-sitekey="6LffdFooAAAAAIzHsOVts351lXw1RE-s3kn7l46-"></div>
                            <button type="submit" id="form-submit" name="form-submit" class="btn pixel-btn"><?php echo $_SESSION["lang"] == "en" ? "Send Message" : "ส่งข้อความ" ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include_once 'inc/footer-area.php'; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<script>
    $(document).on('click', '#form-submit', function() {
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
            alert("Please verify yourself before proceed!");
            return false;
        }
    });
</script>