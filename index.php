<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aadalbert</title>

  <link rel="icon" href="assets/favicon.ico" type="image/x-icon" />
  <script src="js/webfont.js"></script>
  <script src="http://www.w3schools.com/lib/w3data.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="scss/style.min.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="removeLoader()">

  <div id="loader-div">
    <div id="loader"></div>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" data-position="fixed" role="navigation" id="nav">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="brand pull-left" alt="Brand" src="assets/logo.png">
      <a class="navbar-brand bold">Aadalbert</a>
    </div>

    <div class="collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav">
        <li>
          <a class="page-scroll nav-element allHidden" data-target="#main">Esileht</a>
        </li>
        <li>
          <a class="page-scroll nav-element allHidden" data-target="#products">Tooted</a>
        </li>
        <li>
          <a class="page-scroll nav-element allHidden" data-target="#contact">Kontakt</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a class="line-arrow left"></a>
          <a class="line-arrow right"></a>
        </div>
        <div class="modal-body"></div>
      </div>
    </div>
  </div>

  <?php include 'templates/main-section.php';?>
  <?php include 'templates/products-section.php';?>
  <?php include 'templates/contact-section.php';?>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
</body>
</html>
