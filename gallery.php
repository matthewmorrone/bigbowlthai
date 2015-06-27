<html>
	<head>
<meta charset="utf-8">
<title>Big Bowl Thai Cuisine</title>

<!-- <link rel="stylesheet" href="reset.css"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
<!-- <link rel="stylesheet" media="screen" href="bbt.css"> -->
<link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.ttf">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Matthew Morrone">
<meta name="description" content="Thai Restaurant Cuisine Huntsville Alabama.">
<meta name="robots" content="all">
<meta name="keywords" content="Huntsville,Alabama,Thai,Cuisine,Food,Restaurant,Fine,Dining,Takeout,Take-out" />
<!-- http://www.thesitewizard.com/archive/metatags.shtml -->


<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<!--[if lt IE 9]>
<script src="script/html5shiv.js"></script>
<![endif]-->
<script type='text/javascript' src='http://code.jquery.com/jquery-2.1.4.js'></script>
<script type='text/javascript' src='jquery.helpers.js'></script>
<script type='text/javascript' src='http://www.matthewmorrone.com/starch/sugar.js'></script>
<script type='text/javascript' src='http://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script type='text/javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


<style>
img {
height: 100px;
}
</style>




	</head>
	<body>

<!-- <div id="carousel-example-generic" class="carousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox"> -->
<?
$dirname = "food-images";
$dir = new DirectoryIterator($dirname);
foreach ($dir as $fileinfo) {
  $name = $fileinfo->getFilename();
  if (substr($name, 0, 1) === ".") {continue;}
  if (strtolower($fileinfo->getExtension()) !== "jpg") {continue;}


  $path = $fileinfo->getPathname();
  $base = $fileinfo->getBasename(".jpg");

  ?>

    <!-- <div class="item"> -->
      <img src="<?=$path?>" alt="<?=$base?>">
      <!-- <div class="carousel-caption"> -->
        <?=$base?>
      <!-- </div> -->
    <!-- </div> -->
      <?
}
?>
  <!-- </div> -->



  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
<!-- </div> -->

	</body>
</html>
