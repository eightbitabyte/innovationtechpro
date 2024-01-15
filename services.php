<?php
include 'inc/prerequisite.php';
?>
<!DOCTYPE html>
<html lang="en">

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
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/services.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Services Catagory Area Start ##### -->
    <div class="services-catagory-area d-flex flex-wrap">
        <!-- Single Service Catagory -->
        <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/automation-services-v.jpg);">
            <a href="automation-services.php"><?php echo $_SESSION["lang"] == "en" ? "Automation<br>Services" : "บริการด้าน<br>ระบบอัตโนมัติ" ?></a>
        </div>
        <!-- Single Service Catagory -->
        <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/iot-services-v.jpg);">
            <a href="iot-services.php"><?php echo $_SESSION["lang"] == "en" ? "IoT<br>Services" : "บริการ<br>ด้าน IoT" ?></a>
        </div>
        <!-- Single Service Catagory -->
        <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/web-dashboard-v.jpg);">
            <a href="iot-services.php#web-dashboard"><?php echo $_SESSION["lang"] == "en" ? "Web<br>Dashboard" : "เว็บไซต์<br>แดชบอร์ด" ?></a>
        </div>
    </div>
    <!-- ##### Services Catagory Area End ##### -->

    <!-- ##### Services Block Area Start ##### -->
    <!-- Not ready to display -->
    <!-- <php include 'inc/service-block-area.php'; ?> -->
    <!-- ##### Services Block Area End ##### -->

    <!-- ##### Prices Area Start ##### -->
    <!-- Not ready to display -->
    <!-- <php include 'inc/prices-area.php'; ?> -->
    <!-- ##### Prices Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <!-- Not ready to display -->
    <!-- <php include 'inc/service-area.php'; ?> -->
    <!-- ##### Service Area End ##### -->

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