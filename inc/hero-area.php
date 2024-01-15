<section class="hero-area">
  <div class="hero-slideshow owl-carousel">
    <?php
    $StrGetHeroSlide  = "SELECT * FROM hero_area WHERE status = 1;";
    $RecGetHeroSlide  = $Knot->query($StrGetHeroSlide);
    while ($ObjGetHeroSlide = mysqli_fetch_assoc($RecGetHeroSlide)) {
      echo "<!-- Single Slide -->
            <div class='single-slide'>
              <!-- Background Image-->
              <div class='slide-bg-img bg-img' style='background-image: url(img/bg-img/{$ObjGetHeroSlide["seq"]}.webp);'></div>
              <!-- Welcome Text -->
              <div class='container h-100'>
                <div class='row h-100 align-items-center'>
                  <div class='col-12 col-lg-9'>
                    <div class='welcome-text'>
                      <h2 data-animation='fadeInUp' data-delay='300ms'><span>{$ObjGetHeroSlide["phrase1"]}</span><br>{$ObjGetHeroSlide["phrase2"]}</h2>
                      <h4 data-animation='fadeInUp' data-delay='500ms'>{$ObjGetHeroSlide["phrase3"]}</h4>";
      if ($ObjGetHeroSlide["button_text"]) {
        echo "          <a href='{$ObjGetHeroSlide["linkage"]}' class='btn pixel-btn mt-50' data-animation='fadeInUp' data-delay='700ms'>{$ObjGetHeroSlide["button_text"]}</a>";
      }
      echo "              </div>
                  </div>
                </div>
              </div>
            </div>";
    }
    ?>
  </div>
</section>