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
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/automation-services-h.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo $_SESSION["lang"] == "en" ? "Automation Services" : "บริการด้านระบบอัตโนมัติ" ?></h2>
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
            <?php if ($_SESSION["lang"] == "en") { ?>
                <h1>We provide machine maintenance services such as</h1>
                <p>
                    > CNC Lathe<br>
                    > Machining center<br>
                    > Machine maintenance services such as CNC Lathe</p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <p>&nbsp;</p>
                <h1>Automation system construction services such as industrial robotic systems, automated production systems, material handling systems</h1>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <?php } else { ?>
                <h1>บริการงานบำรุงรักษาเครื่องจักร เช่น</h1>
                <p>
                    > CNC Lathe<br>
                    > Machining Center<br>
                    > บริการบำรุงรักษาเครื่องจักร เช่น CNC Lathe</p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <p>&nbsp;</p>
                <h1>เราให้บริการงานสร้างระบบอัตโนมัติ เช่น ระบบหุ่นยนต์อุตสาหกรรม, ระบบการผลิตอัตโนมัติ, ระบบการลำเลียงวัสดุ</h1>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <?php } ?>
        </div>
    </section>
    <!-- ##### Feature Area End ##### -->

    <!-- ##### Feature Area Start ##### -->
    <section class="pixel-feature-area d-flex flex-wrap">
        <!-- Feature Content -->
        <div class="feature-content">
            <?php if ($_SESSION["lang"] == "en") { ?>

                <h1>Also services to build machine according to customer needs.</h1>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <p>&nbsp;</p>
                <h1>Automation Parts Procurement Service</h1>
                <p>
                    • PCB Board<br>
                    • PLC<br>
                    • Sensor<br>
                    • Electric part<br>
                    • Mechanic part
                </p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <?php } else { ?>
                <h1>บริการงานสร้างเครื่องจักรตามความต้องการของลูกค้า</h1>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <p>&nbsp;</p>
                <h1>บริการจัดหาชิ้นส่วนอุปกรณ์ของระบบอัตโนมัติ</h1>
                <p>
                    • PCB Board<br>
                    • PLC<br>
                    • เซ็นเซอร์<br>
                    • ชิ้นส่วนอิเล็กทรอนิกส์<br>
                    • อะไหล่เครื่องจักร
                </p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <?php } ?>
        </div>

        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/12.jpg);"></div>
    </section>
    <!-- ##### Feature Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <!-- <section class="pixel-cool-facts-area bg-gray section-padding-100-0">
        <div class="container-fluid">
            <div class="row"> -->

    <!-- Single Cool Facts -->
    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m1.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">3.451</span></h2>
                            <h6>Projects Completed</h6>
                        </div>
                    </div>
                </div> -->

    <!-- Single Cool Facts -->
    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m2.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">235.025</span></h2>
                            <h6>PSD Files</h6>
                        </div>
                    </div>
                </div> -->

    <!-- Single Cool Facts -->
    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m3.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">4021</span></h2>
                            <h6>Presentations Made</h6>
                        </div>
                    </div>
                </div> -->

    <!-- Single Cool Facts -->
    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="img/core-img/m4.png" alt="">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter">11.236</span></h2>
                            <h6>Deadlines Achived</h6>
                        </div>
                    </div>
                </div> -->

    <!-- </div>
        </div>
    </section> -->
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <!-- <section class="team-member-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12"> -->
    <!-- Section Heading -->
    <!-- <div class="section-heading text-center">
                        <h2>A Beautiful Team</h2>
                        <picture>
                            <source srcset="img/core-img/logo-s.webp" type="image/webp">
                            <source srcset="img/core-img/logo-s.png" type="image/png">
                            <img class="mb-30" src="img/core-img/logo-s.png" alt="Innovation Tech Pro">
                        </picture>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div> -->

    <!-- <div class="row"> -->
    <!-- Single Team Member -->
    <!-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member mb-100">
                        <img src="img/bg-img/14.jpg" alt=""> -->
    <!-- Hover Text -->
    <!-- <div class="hover-text d-flex align-items-end justify-content-center text-center">
                            <div class="hover--">
                                <h4>Jane Doe</h4>
                                <h6>Digital Designer</h6>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    <!-- Single Team Member -->
    <!-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member mb-100">
                        <img src="img/bg-img/15.jpg" alt=""> -->
    <!-- Hover Text -->
    <!-- <div class="hover-text d-flex align-items-end justify-content-center text-center">
                            <div class="hover--">
                                <h4>Jane Doe</h4>
                                <h6>Digital Designer</h6>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    <!-- Single Team Member -->
    <!-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member mb-100">
                        <img src="img/bg-img/16.jpg" alt=""> -->
    <!-- Hover Text -->
    <!-- <div class="hover-text d-flex align-items-end justify-content-center text-center">
                            <div class="hover--">
                                <h4>Jane Doe</h4>
                                <h6>Digital Designer</h6>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Team Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <!-- <section class="testimonial-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12"> -->
    <!-- Testimonial Slides -->
    <!-- <div class="testimonial-slides owl-carousel"> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/17.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/18.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/17.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/18.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/17.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div> -->

    <!-- Single Slide -->
    <!-- <div class="single-testimonial-slide">
                            <img src="img/bg-img/18.jpg" alt="">
                            <h4>John Doe</h4>
                            <span>Client</span>
                            <h5>Suspendisse ac tempor nisl. Morbi vel purus vel ligula laoreet tristique vel tempus orci. Curabitur eget vulputate mauris. Vestibulum eu sem aliquam, convallis erat quis, dictum purus. </h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Testimonial Area End ##### -->

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