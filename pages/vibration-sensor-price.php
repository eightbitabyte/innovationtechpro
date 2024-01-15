<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Innovation Tech Pro is a company to provide solutions that get through your goals.">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    <title>Vibration Sensor - Innovation Tech Pro</title>
    <style>
        .pm-container {
            position: relative;
            font-family: Arial, Helvetica, sans-serif;
        }

        .text-block-left {
            position: absolute;
            top: 40px;
            left: 20px;
            color: lightgray;
            padding-left: 20px;
            padding-right: 20px;
        }

        .text-block-right {
            position: absolute;
            top: 45px;
            right: 90px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>

</head>

<body>
    <div class="container-fluid mt-3">
        <picture>
            <source media="(min-width: 650px)" srcset="img/pm_header.webp" type="image/webp">
            <source media="(min-width: 650px)" srcset="img/pm_header.jpg" type="image/jpeg">
            <img src="img/pm_header.jpg" alt="Predictive Maintenance" style="width: 100%;">
        </picture>
        <div class="text-block-left">
            <h2>Predictive</h2>
            <h2>Maintenance</h2>
        </div>
        <div class="text-block-right">
            <picture>
                <source media="(min-width: 650px)" srcset="../img/core-img/logo.webp" type="image/webp">
                <source media="(min-width: 650px)" srcset="../img/core-img/logo.png" type="image/png">
                <source media="(min-width: 465px)" srcset="../img/core-img/logo-s.webp" type="image/webp">
                <source media="(min-width: 465px)" srcset="../img/core-img/logo-s.png" type="image/png">
                <img src="../img/core-img/logo-s.png" alt="Innovation Tech Pro" style="width: 150%;">
            </picture>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-sm-6">
                <h4>Innovation Tech Pro Co., Ltd.</h4>
                <h6>Address: 279/170 Moo 3, Bowin, Sriracha, Chonburi 20230</h6>
            </div>
            <div class="col-sm-6">
                <h6 class="text-end">Tel: <a href="tel:0818393078">081-8393078</a>, <a href="tel:0659344281">065-9344281</a></h6>
                <h6 class="text-end"><a href="https://www.innovationtechpro.com" target="_self">innovationtechpro.com</a></h6>
            </div>
        </div>
    </div>
    <div class=" container-fluid mt-3">
        <div class="table-responsive">
            <table class="table table-sm table-bordered small">
                <thead class="table-success">
                    <?php
                    echo "<tr class='text-center'>
                            <th>รายการ</th>
                            <th>ราคา</th>";
                    for ($i = 1; $i <= 20; $i++) {
                        echo "<th>{$i}</th>";
                    }
                    ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vibration Sensor Set
                            <ul>
                                <li>Vibration Sensor and Temperature</li>
                                <li>Connector 5 pole 5 m.</li>
                                <li>Bracket: Mounting for magnet mount</li>
                            </ul>
                        </td>
                        <td class="text-center">Set ละ 14,000 บาท</td>
                        <?php
                        $arrsensorset = [];
                        $init_sensorset = 14000;
                        for ($sensorset = 1; $sensorset <= 20; $sensorset++) {
                            echo "<td class='text-center'>" . number_format($init_sensorset * $sensorset) . "</td>";
                            $arrsensorset[$sensorset] = $init_sensorset * $sensorset;
                        }
                        ?>
                    </tr>
                    <tr class="table-secondary">
                        <td>IIoT Box
                            <ul>
                                <li>IoT Gateway Protocol Converter (up to 800 Tags)</li>
                                <li>IoT Gateway Cellular Router</li>
                                <li>Power supply, Terminal block, accessories</li>
                            </ul>
                        </td>
                        <td class="text-center">Box ละ 40,000 บาท<br>(1 Box รองรับ Sensor 20 Set)
                        </td>
                        <?php
                        $arriiotbox = [];
                        $init_iiotbox = 40000;
                        for ($iiotset = 1; $iiotset <= 20; $iiotset++) {
                            echo "<td class='text-center'>" . number_format($init_iiotbox) . "</td>";
                            $arriiotbox[$iiotset] = $init_iiotbox;
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>Vibration Sensor Data Mapping</td>
                        <td class="text-center">Mapping ตัวแรก 16,000 บาท<br>ตัวถัดไป ตัวละ 8,000 บาท
                        </td>
                        <?php
                        $arrmapping = [];
                        $init_mapping = 8000;
                        for ($mappingset = 1; $mappingset <= 20; $mappingset++) {
                            $init_mapping += 8000;
                            echo "<td class='text-center'>" . number_format($init_mapping) . "</td>";
                            $arrmapping[$mappingset] = $init_mapping;
                        }
                        ?>
                    </tr>
                    <tr class="table-secondary">
                        <td>Cloud + Software + Machine Learning</td>
                        <td class="text-center">ปีละ 7,200 บาท / Sensor<br>( 600 บาท / เดือน )</td>
                        <?php
                        $arrcloud = [];
                        $init_cloud = 0;
                        for ($cloudset = 1; $cloudset <= 20; $cloudset++) {
                            $init_cloud += 7200;
                            echo "<td class='text-center'>" . number_format($init_cloud) . "</td>";
                            $arrcloud[$cloudset] = $init_cloud;
                        }
                        ?>
                    </tr>
                    <tr>
                        <td class="text-danger">LINE Alarm (Optional)</td>
                        <td class="text-danger text-center">Set ละ 4,000 บาท / Sensor</td>
                        <?php
                        $arrline = [];
                        $init_line = 0;
                        for ($lineset = 1; $lineset <= 20; $lineset++) {
                            $init_line += 4000;
                            echo "<td class='text-danger text-center'>" . number_format($init_line) . "</td>";
                            $arrline[$lineset] = $init_line;
                        }
                        ?>
                    </tr>
                </tbody>
                <tfooter>
                    <tr class="table-primary h6 text-center">
                        <td colspan="2" class="text-end">Total </td>
                        <?php
                        for ($totalset = 1; $totalset <= 20; $totalset++) {
                            echo "<td>" . number_format($arrsensorset[$totalset] + $arriiotbox[$totalset] + $arrmapping[$totalset] + $arrcloud[$totalset] + $arrline[$totalset]) . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td colspan="22">ราคาดังกล่าวไม่รวมค่าติดตั้ง, ความยาวสายมาตรฐาน 5 เมตร, ค่าอุปกรณ์ในการเดินสาย อาจมีการเปลี่ยนแปลงตามสภาพพื้นที่หน้างานที่ติดตั้ง</td>
                    </tr>
                </tfooter>
            </table>
        </div>
    </div>
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-warning p-3">
                    <p class="h5">ข้อดีของ Predictive Maintenance</p>
                    <ol>
                        <li>รู้ล่วงหน้า - ลดความเสี่ยงจากเครื่องจักร breakdown</li>
                        <li>วางแผนการบำรุงรักษาได้</li>
                        <li>ลดต้นทุนการทำ Preventive Maintenance</li>
                        <li>รู้สถานะ (สุขภาพ) ของ Motor ตลอดเวลา</li>
                    </ol>
                    <br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-danger text-white p-3">
                    <p class="h5">Cloud + Software + Machine Learning</p>
                    <ul>
                        <li>ค่าบริการรายปี 7,200 บาท / 1 Sensor</li>
                        <li>ค่าบริการเหมาจ่าย (7 ปี) 50,000 บาท / 1 Sensor</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-primary text-white p-3">
                    <p class="h5">Why Cloud...</p>
                    <ol>
                        <li>ไม่ต้องค่าใช้จ่ายในส่วน Computer & Server</li>
                        <li>Software จะ up-to-date เสมอ</li>
                        <li>ไม่มีค่าค่าใช้จ่ายด้าน Server Maintenance</li>
                        <li>ลดต้นทุนการติดตั้ง</li>
                        <li>ข้อตกลงระดับการบริการ (SLA) 99.99%"</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>

</html>