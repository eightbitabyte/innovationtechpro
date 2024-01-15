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
                        <h2><?php echo $_SESSION["lang"] == "en" ? "IoT Services" : "บริการด้าน IoT" ?><br><span class="text-dark" style="font-size:large;">(Internet of Things)</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Feature Area Start ##### -->
    <section class="pixel-feature-area d-flex flex-wrap">
        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/iot-services-v.jpg);"></div>

        <!-- Feature Content -->
        <div class="feature-content">
            <?php if ($_SESSION["lang"] == "en") { ?>
                <h1>Consultation, designing, development of computer systems. Web pages and networking programs</h1>
                <p>
                    > MES - Manufacturing Execution System<br>
                    > SCADA - Supervisory Control and Data<br>
                    > PLC - Programmable Logic Controller<br>
                    > Machine - Machanically, Electrically or Electronically</p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <!-- <p>&nbsp;</p> -->
                <!-- <h1>Let us do machine maintenance services such as CNC Lathe, Machining center</h1> -->
                </p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <?php } else { ?>
                <h1>บริการให้คำปรึกษา ออกแบบ พัฒนาระบบคอมพิวเตอร์ โปรแกรมเว็บเพจและระบบเครือข่าย</h1>
                <p>
                    > MES - Manufacturing Execution System<br>
                    > SCADA - Supervisory Control and Data<br>
                    > PLC - Programmable Logic Controller<br>
                    > Machine - Machanically, Electrically or Electronically</p>
                <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
                <!-- <p>&nbsp;</p> -->
                <!-- <h1>Let us do machine maintenance services such as CNC Lathe, Machining center</h1> -->
                </p>
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
                <h1>Internet of Things Services</h1>
                <p>
                    • Human Machine Interface (HMI)<br>
                    • Supervisor System<br>
                    • Remote Terminal Units (RTU)<br>
                    • Programmable Logic Controller (PLC)<br>
                    • Communication Infrastructures
                </p>
            <?php } else { ?>
                <h1>บริการด้าน IoT</h1>
                <p>
                    • สามารถควบคุมกระบวนการต่าง ๆ ผ่านระบบ HMI<br>
                    • ทำหน้าที่รักษาความปลอดภัยในการเข้าถึงระบบ<br>
                    • คำสั่งระยะไกลที่ทำหน้าที่เชื่อมต่อกับเซ็นเซอร์ (RTU)<br>
                    • อุปกรณ์สำหรับควบคุมและสั่งการงานตามโปรแกรม (PLC)<br>
                    • Ethernet TCP/IP ,LAN ,WAN และ WIFI เป็นต้น
                </p>
            <?php } ?>
            <picture>
                <source srcset="img/bg-img/scada-network-h.webp" type="image/webp">
                <source srcset="img/bg-img/scada-network-h.jpg" type="image/jpeg">
                <img class="img-fluid" src="img/bg-img/scada-network-h.jpg" style="width: 80%;" alt="MES Network - Innovation Tech Pro">
            </picture>
            <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
        </div>

        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/mes-network-v.jpg);"></div>
    </section>
    <!-- ##### Feature Area End ##### -->


    <!-- ##### Feature Area Start ##### -->
    <section class="pixel-feature-area d-flex flex-wrap">
        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/iot-web-v.jpg);"></div>

        <!-- Feature Content -->
        <div id="web-dashboard" class="feature-content">
            <?php if ($_SESSION["lang"] == "en") { ?>

                <!-- <h5 class="text-justify">Dashboard เป็นเครื่องมือที่จำเป็นสำหรับธุรกิจทุกขนาดและทุกอุตสาหกรรม นำเสนอการเข้าถึงข้อมูลตามเวลาจริงในจุดเดียว ทำให้ผู้ใช้สามารถติดตามประสิทธิภาพ ระบุแนวโน้ม และตัดสินใจได้อย่างรวดเร็ว ในโลกธุรกิจที่เปลี่ยนแปลงอย่างรวดเร็วในปัจจุบัน</h5> -->
                <h5 class="text-justify">Dashboard is one of many essential tools for all size of businesses and industries which offer one-stop access to real-time information. This allows users to track performance, trend prediction and make decisions precisely in the rapidly changing world</h5>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Front End</p>
                            <ul>
                                <li style="list-style-type: circle;">Markup and web languages such as HTML, CSS and Javascript</li>
                                <li style="list-style-type: circle;">Asynchronous requests and Ajax</li>
                                <li style="list-style-type: circle;">Specialized web editing software</li>
                                <li style="list-style-type: circle;">Image editing Accessibility</li>
                                <li style="list-style-type: circle;">Cross-browser issues</li>
                                <li style="list-style-type: circle;">Search engine optimisation</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>Back End</p>
                            <ul>
                                <li style="list-style-type: disc;">Programming and scripting such as Python, Ruby and/or Perl
                                <li style="list-style-type: disc;">Server architecture</li>
                                <li style="list-style-type: disc;">Database administration</li>
                                <li style="list-style-type: disc;">Scalability</li>
                                <li style="list-style-type: disc;">Security</li>
                                <li style="list-style-type: disc;">Data transformation</li>
                                <li style="list-style-type: disc;">Backup Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h5 class="text-justify">Dashboard เป็นเครื่องมือที่จำเป็นสำหรับธุรกิจทุกขนาดและทุกอุตสาหกรรม นำเสนอการเข้าถึงข้อมูลตามเวลาจริงในจุดเดียว ทำให้ผู้ใช้สามารถติดตามประสิทธิภาพ ระบุแนวโน้ม และตัดสินใจได้อย่างรวดเร็ว ในโลกธุรกิจที่เปลี่ยนแปลงอย่างรวดเร็วในปัจจุบัน</h5>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Front End</p>
                            <ul>
                                <li style="list-style-type: circle;">ภาษาและการเขียนเว็บ เช่น HTML, CSS และ Javascript</li>
                                <li style="list-style-type: circle;">การเขียนเว็บแบบ Asynchronous และ Ajax</li>
                                <li style="list-style-type: circle;">ซอฟต์แวร์เขียนเว็บโดยเฉพาะ</li>
                                <li style="list-style-type: circle;">การเข้าถึงรูปภาพด้วยการแก้ไข</li>
                                <li style="list-style-type: circle;">ปัญหาการใช้งานข้ามเบราว์เซอร์</li>
                                <li style="list-style-type: circle;">การเพิ่มประสิทธิภาพกลไกค้นหา</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>Back End</p>
                            <ul>
                                <li style="list-style-type: disc;">การเขียนโปรแกรม และโค้ด เช่น Python, Ruby และ Perl
                                <li style="list-style-type: disc;">สถาปัตยกรรมเซิร์ฟเวอร์</li>
                                <li style="list-style-type: disc;">การบริหารงานฐานข้อมูล</li>
                                <li style="list-style-type: disc;">การขยายขนาดเซิร์ฟเวอร์</li>
                                <li style="list-style-type: disc;">การดูแลด้านความปลอดภัย</li>
                                <li style="list-style-type: disc;">การแปลงข้อมูลเพื่อนำไปใช้งาน</li>
                                <li style="list-style-type: disc;">โซลูชั่นการสำรองข้อมูล</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
            <p>&nbsp;</p>
            <h5 class="text-justify"><?php echo $_SESSION["lang"] == "en" ? "Hardware and software components procurement services and provide computer system maintenance services" : "บริการจัดหาส่วนประกอบทั้งฮาร์ดแวร์ และซอฟต์แวร์ รวมถึงบริการบำรุงรักษาระบบคอมพิวเตอร์" ?></h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-laptop.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-laptop.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-laptop.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Laptop" : "แล็ปท็อป" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-desktop.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-desktop.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-desktop.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Desktop" : "เดสก์ท็อป" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-rack.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-rack.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-rack.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Rack Server" : "เซิร์ฟเวอร์แบบชั้น" ?></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-linux.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-linux.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-linux.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Linux OS" : "ระบบปฏิบัติการลีนุกซ์" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-windows.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-windows.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-windows.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "windows OS" : "ระบบปฏิบัติการวินโดวส์" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mt-5 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/hw-sw-icon-macos.webp" type="image/webp">
                                <source srcset="img/core-img/hw-sw-icon-macos.png" type="image/png">
                                <img src="img/core-img/hw-sw-icon-macos.png" style="width:50%" alt="IoT (Internet of Things) Services" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "macOS" : "ระบบปฏิบัติการ macOS" ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <h5 class="text-justify"><?php echo $_SESSION["lang"] == "en" ? "Computer System Maintenance Services" : "บริการบำรุงรักษาระบบคอมพิวเตอร์" ?></h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt-3 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/corrective-mt.webp" type="image/webp">
                                <source srcset="img/core-img/corrective-mt.png" type="image/png">
                                <img src="img/core-img/corrective-mt.png" style="width:50%" alt="Corrective Maintenance" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Corrective Maintenance" : "การบำรุงรักษาปัญหาที่เกิดขึ้น ระหว่างการใช้งาน" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 mt-3 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/perfective-mt.webp" type="image/webp">
                                <source srcset="img/core-img/perfective-mt.png" type="image/png">
                                <img src="img/core-img/perfective-mt.png" style="width:50%" alt="Perfective Maintenance" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Perfective Maintenance" : "การวัดผล และการพัฒนา เพื่อป้องกันข้อผิดพลาด" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 mt-3 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/adaptive-mt.webp" type="image/webp">
                                <source srcset="img/core-img/adaptive-mt.png" type="image/png">
                                <img src="img/core-img/adaptive-mt.png" style="width:50%" alt="Adaptive Maintenance" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Adaptive Maintenance" : "ดูแลการเปลี่ยนแปลงที่เกิดขึ้นในการพัฒนาซอฟต์แวร์" ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 mt-3 single-service-area">
                        <figure class="figure text-center">
                            <picture>
                                <source srcset="img/core-img/preventive-mt.webp" type="image/webp">
                                <source srcset="img/core-img/preventive-mt.png" type="image/png">
                                <img src="img/core-img/preventive-mt.png" style="width:50%" alt="Preventive Maintenance" class="figure-img img-fluid">
                            </picture>
                            <figcaption class="figure-caption text-center"><?php echo $_SESSION["lang"] == "en" ? "Preventive Maintenance" : "ป้องกันปัญหาเกี่ยวกับ ซอฟต์แวร์ก่อนที่จะเกิดขึ้น" ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- <a href="#" class="btn pixel-btn mt-15">CONTINUE READING</a> -->
        </div>
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