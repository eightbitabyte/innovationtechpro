<?php
include 'inc/prerequisite.php';

$_SESSION["lang"] = (isset($_SESSION["lang"]) ? $_SESSION["lang"] : $_SESSION["lang"] = "th");

?>
<!DOCTYPE html>
<html lang="en">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
include_once 'inc/head-zone.php';
// mail() module
if (isset($_REQUEST['form-submit'])) {
    $sender     = htmlspecialchars($_POST["sender"]);
    $recipient  = htmlspecialchars($_POST["recipient"]);
    $phone      = htmlspecialchars($_POST["phone"]);
    $email      = htmlspecialchars($_POST["email"]);
    $subject    = htmlspecialchars($_POST["subject"]);
    $message    = htmlspecialchars($_POST["message"]);

    $contentmsg = " <html>
                    <head>
                        <title>Message from Innovation Tech Pro <strong style='color:red;'>Contact Form</strong></title>
                        <meta http-equiv='content-type' content='text/html;charset=UTF-8'>
                    </head>
                    <body>
                        <p>Message from Innovation Tech Pro <strong style='color:red;'>Contact Form</strong>.</p>
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

    // mail("jiraroj.le@innovationtechpro.com", $subject, $contentmsg, $headers);
    mail($recipient, $subject, $contentmsg, $headers);

    echo "<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
            <script language='javascript' type='text/javascript'>
                window.alert('Your message has been sent.');
            </script>";
}
?>

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

    <!-- ##### Hero Area Start ##### -->
    <?php include_once 'inc/hero-area.php'; ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <?php include_once 'inc/top-cate.php'; ?>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="nl-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-9">
                    <div class="nl-form mb-100">
                        <h4>Stay in touch with us?></h4>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlEmail" placeholder="Email Address ...">
                            <button type="submit" class="d-none"></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="view-projects-btn text-right mb-100">
                        <a href="#" class="btn pixel-btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Portfolio Area Start ###### -->
    <!-- <php include_once 'inc/portfolio.php'; ?> -->
    <!-- ##### Portfolio Area End ###### -->

    <!-- ##### Contact Area Start #####-->
    <?php include_once 'inc/contact-area.php'; ?>
    <!-- ##### Contact Area End #####-->

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
            alert("Please verify you are not a robot!");
            return false;
        }
    });
</script>