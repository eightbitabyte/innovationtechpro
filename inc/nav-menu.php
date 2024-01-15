<div class="classynav">
  <ul>
    <li><a href="."><?php echo $_SESSION["lang"] == "en" ? "Home" : "หน้าหลัก" ?></a></li>
    <!-- <li><a href="#">Know us</a>
      <ul class="dropdown">
        <li><a href="about.php">About Us</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="elements.html">Elements</a></li>
        <li><a href="mission.php">Mission</a></li>
      </ul>
    </li> -->
    <li><a href="mission.php"><?php echo $_SESSION["lang"] == "en" ? "Mission" : "ภารกิจ" ?></a></li>
    <li><a href="services.php"><?php echo $_SESSION["lang"] == "en" ? "Services" : "บริการ" ?></a>
      <ul class="dropdown">
        <li><a href="automation-services.php"><?php echo $_SESSION["lang"] == "en" ? "Automation" : "ระบบอัตโนมัติ" ?></a></li>
        <li><a href="iot-services.php"><?php echo $_SESSION["lang"] == "en" ? "IoT Services" : "บริการด้าน IoT" ?></a></li>
      </ul>
    </li>
    <!-- <li><a href="portfolio.html">Pages</a>
      <ul class="dropdown">
        <li><a href=".">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.html">Services</a>
          <ul class="dropdown">
            <li><a href=".">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a>
              <ul class="dropdown">
                <li><a href=".">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="elements.html">Elements</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="elements.html">Elements</a></li>
          </ul>
        </li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="elements.html">Elements</a></li>
      </ul>
    </li> -->
    <!-- <li><a href="#">Mega</a>
      <div class="megamenu">
        <ul class="single-mega cn-col-4">
          <li><a href=".">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="single-mega cn-col-4">
          <li><a href=".">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="single-mega cn-col-4">
          <li><a href=".">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="single-mega cn-col-4">
          <li><a href=".">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="elements.html">Elements</a></li>
        </ul>
      </div>
    </li> -->
    <li><a href="contact.php"><?php echo $_SESSION["lang"] == "en" ? "Contact" : "ติดต่อเรา" ?></a></li>
    <li><a href="setlang.php?uri=<?php echo $OnURI; ?>">
        <picture>
          <source srcset="img/core-img/enthflag.webp" type="image/webp">
          <source srcset="img/core-img/enthflag.jpg" type="image/jpeg">
          <img src="img/core-img/enthflag.jpg" alt="Switching language.">
        </picture>
      </a></li>
  </ul>

  <!-- Top Social Info -->
  <div class="top-social-info ml-5">
    <?php include 'social-info.php'; ?>
  </div>
</div>