<section id="products">
  <?php
    $headings = array('Paneelaiad', 'Puitaiad', 'Sepisaiad', 'Võrkaiad', 'Väravad', 'Automaatika', 'Tõkkepuud', 'Piirded');
    $assets = array('paneel', 'puit', 'sepis', 'vork', 'varav', 'autom', 'tokke', 'piird');
    $images_lengths = array(9, 7, 7, 2, 10, 8, 3, 3);
    $gallerys = array();
    for ($i = 0; $i < sizeof($headings); $i++) {
      $heading = $headings[$i];
      $asset = $assets[$i];
      $img = 'assets/' . $asset . '/' . $asset . '1';

      for ($m = 0; $m < sizeof($headings); $m++) {
        $img_elements = array();
        $gallery_asset = $assets[$m];
        $images_length = $images_lengths[$m];
        for ($j = 1; $j < $images_length + 1; $j++) {
          $img_element =
            '<li class="col-xs-6 col-sm-3 ' . $gallery_asset . '">
              <a href="assets/' . $gallery_asset . '/' . $gallery_asset . $j . '.JPG" class="image" data-lightbox="' . $gallery_asset . '">
                <img src="assets/' . $gallery_asset . '/' . $gallery_asset . $j . '_350.JPG">
              </a>
            </li>';
          array_push($img_elements, $img_element);
        }
        array_push($gallerys, $img_elements);
      }

      include 'product-card.php';
    }
  ?>
</section>
