<?php
include '../inc/prerequisite.php';
$nc = isset($_GET["nc"]) ? $_GET["nc"] : "";

if (!$nc) {
  header("location:https://www.innovationtechpro.com");
}

$StrGetBusinessCard = "SELECT * FROM businesscard WHERE abbr = '{$nc}';";
$RecGetBusinessCard = $Knot->query($StrGetBusinessCard);
if ($RecGetBusinessCard->num_rows == 0) {
  header("location:https://www.innovationtechpro.com");
}
$ObjGetBusinessCard = mysqli_fetch_assoc($RecGetBusinessCard);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Innovation Tech Pro is a company to provide solutions that get through your goals.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Innovation Tech Pro - IIoT and Automation Services Provider</title>

  <!-- Favicon -->
  <link rel="icon" href="../img/core-img/favicon.ico">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
    }
  </style>
</head>

<body>

  <!-- <h2 style="text-align:center">Business Namecard</h2> -->

  <div class="card">
    <div style="margin: 20px 0px;">
      <!-- <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a> -->
      <a href="tel:<?= $ObjGetBusinessCard["contactnumber"] ?>"><i class="fa fa-phone" style="color:orange;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="sms:<?= $ObjGetBusinessCard["contactnumber"] ?>"><i class="fa fa-comments-o" style="color: red;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="email:<?= strtolower($ObjGetBusinessCard["email"]) ?>"><i class="fa fa-envelope" style="color: blue;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://maps.app.goo.gl/sCjAFGLsEWkMtq1G6" target="_blank"><i class="fa fa-map-marker" style="color: black;"></i></a>
    </div>
    <picture>
      <source srcset="img/<?= strtolower($ObjGetBusinessCard["first_name"]) ?>.webp" type="image/webp">
      <source srcset="img/<?= strtolower($ObjGetBusinessCard["first_name"]) ?>.jpg" type="image/jpeg">
      <img src="img/<?= strtolower($ObjGetBusinessCard["first_name"]) ?>.jpg" alt="<?= ucwords($ObjGetBusinessCard["first_name"]) . " " . ucwords($ObjGetBusinessCard["last_name"]) ?>" style="width:100%">
    </picture>
    <h3><?= ucwords($ObjGetBusinessCard["first_name"]) . " " . ucwords($ObjGetBusinessCard["last_name"]) ?></h3>
    <p class="title"><?= ucwords($ObjGetBusinessCard["position"]) ?></p>
    <p><img src="../img/core-img/logo-s.png" class="img-fluid center">Innovation Tech Pro</p>
    <!-- #TODO: Make this more happier -->
    <a href="tel:<?= $ObjGetBusinessCard["contactnumber"] ?>"><?= $ObjGetBusinessCard["contactnumber"] ?></a><br>
    <a style="font-size: smaller;" href="mailto:<?= strtolower($ObjGetBusinessCard["email"]) ?>"><?= strtolower($ObjGetBusinessCard["email"]) ?></a>
    <p><button type="button" onclick="window.location.href='https://maps.app.goo.gl/sCjAFGLsEWkMtq1G6'">Show map</button></p>
    <p style="text-align: left; margin: 10px;">279/170 Moo 3, Bo Win<br>Si Racha, Chonburi 20230 Thailand</p>
  </div>

</body>

</html>