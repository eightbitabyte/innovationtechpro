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
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/mission.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo $_SESSION["lang"] == "en" ? "Mission" : "ภารกิจ" ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Feature Area Start ##### -->
    <section class="pixel-feature-area d-flex flex-wrap">
        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/12.jpg);"></div>

        <!-- Feature Content -->
        <div class="feature-content">
            <?php
            if ($_SESSION["lang"] == "en") { ?>
                <h1>On the mission</h1>
                <ul>
                    <li style="list-style-type: circle;">
                        <p>It helps industrial plants to increase production efficiency, reduce costs and improve product quality.</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>Develops and provides automation and IIoT solutions, the best to customers.</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>Work with customers to design and implement solutions that meet their specific needs.</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>Support and maintain automation and IIoT solutions for customers.</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>Committed to developing new technologies and innovations to help customers achieve their business goals.</p>
                    </li>
                </ul>
            <?php } else { ?>
                <h1>ด้วยภารกิจของเรา</h1>
                <ul>
                    <li style="list-style-type: circle;">
                        <p>ช่วยให้โรงงานอุตสาหกรรมสามารถเพิ่มประสิทธิภาพการผลิต ลดต้นทุน และปรับปรุงคุณภาพของผลิตภัณฑ์</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>พัฒนาและให้บริการโซลูชันระบบอัตโนมัติและIIOT ที่ดีที่สุดให้กับลูกค้า</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>ทำงานร่วมกับลูกค้าเพื่อออกแบบและติดตั้งโซลูชันที่ตรงกับความต้องการเฉพาะ</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>สนับสนุนและบำรุงรักษาโซลูชันระบบอัตโนมัติและ IIoT ให้กับลูกค้า</p>
                    </li>
                    <li style="list-style-type: circle;">
                        <p>มุ่งมั่นที่จะพัฒนาเทคโนโลยีและนวัตกรรมใหม่ๆ เพื่อช่วยให้ลูกค้าสามารถบรรลุเป้าหมายทางธุรกิจ</p>
                    </li>
                </ul>
            <?php } ?>
            <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
        </div>
    </section>
    <!-- ##### Feature Area End ##### -->

    <!-- ##### Feature Area Start ##### -->
    <!-- <section class="pixel-feature-area d-flex flex-wrap">
        <-- Feature Content -->
    <!-- <div class="feature-content">
            <h1>Pixel by Pixel</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit, elit pulvinar interdum dapibus, est dui convallis orci, vel gravida erat ante in sapien. Ut sed tristique dui, id mattis enim. Vivamus ac mollis ligula. In feugiat, libero a posuere aliquam, lorem orci suscipit dui, sit amet pellentesque dolor diam et elit.</p>
            <p>Morbi sed lectus sem. Suspendisse vehicula tellus viverra blandit pharetra. Nulla lacinia sit amet elit in congue. Suspendisse suscipit molestie tellus, id aliquet neque ullamcorper ac. Aliquam sed egestas lacus. Integer egestas erat diam.</p>
            <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a>
        </div> -->

    <!-- Feature Thumbnail ->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/13.jpg);"></div>
    </section> -->
    <!-- ##### Feature Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <!-- <section class="pixel-cool-facts-area bg-gray section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <-- Single Cool Facts ->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m1.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">3.451</span></h2>
                            <h6>Projects Completed</h6>
                        </div>
                    </div>
                </div>

                <-- Single Cool Facts ->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m2.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">235.025</span></h2>
                            <h6>PSD Files</h6>
                        </div>
                    </div>
                </div>

                <-- Single Cool Facts ->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m3.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">4021</span></h2>
                            <h6>Presentations Made</h6>
                        </div>
                    </div>
                </div>

                <-- Single Cool Facts ->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m4.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">11.236</span></h2>
                            <h6>Deadlines Achived</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- ##### Cool Facts Area End ##### -->

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