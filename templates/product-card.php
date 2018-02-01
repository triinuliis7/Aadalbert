<div class="product-card col-md-3 col-sm-4 col-xs-6" id=<?php echo $asset ?>>
  <div class="product-card--container">
    <div class="product-card--content">
      <div class="product-card--img" style="background-image: url(<?php echo $img?>.jpg)"></div>
      <div class="overlay overlay--white"></div>
      <div class="product-card--text"><?php echo $heading ?></div>
    </div>
  </div>
</div>

<div class="product-gallery">
  <?php
    for ($k = 0; $k < sizeof($headings); $k++) {
      echo '
      <h3 class="product-gallery--text ' . $assets[$k] . '" style="display: none;">
        ' . $assets[$k] . 'aiad on kõige paremad, sest need on maja ümber ja kaitsevad röövlite eest
      </h3>
      <div class="product-gallery--container ' . $assets[$k] . '" style="display: none;">
        <div class="product-gallery--content ' . $assets[$k] . '" style="display: none;">
          <div class="arrow-container arrow--left">
            <i class="arrow"></i>
          </div>
          <ul class="gallery col-xs-12 toode_gallery owl-carousel">' .
            implode('', $gallerys[$k]).
          '</ul>
          <div class="arrow-container arrow--right">
            <i class="arrow"></i>
          </div>
        </div>
      </div>';
    }
  ?>
</div>
