<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Big Bowl Thai Cuisine</title>
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
	<script type='text/javascript' src='disable-scroll.js'></script>
	<script type='text/javascript' src='http://www.matthewmorrone.com/starch/sugar.js'></script>
	<script type='text/javascript' src='http://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
	<script type='text/javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>

	/* fonts */
	@font-face {
		font-family: 'Cooper-Black';
		src: url('fonts/Cooper-Black.ttf') format('truetype');
	}
	@font-face {
		font-family: 'Bamberg';
		src: url('fonts/Bamberg-Serial.ttf') format('truetype');
	}
	@font-face {
		font-family: 'Clarendon';
		src: url('fonts/Clarendon.ttf') format('truetype');
	}


	* {
		font-weight: normal !important;
		border: none;
	}
	html, body {
		font: normal 12px/140% "Trebuchet MS", Verdana, Arial, sans-serif;
		background-color: #d17415;
		margin: 0px;
	}
	container {
		/*background-color: #ffeed6;*/
		background-color: #fdf3e5;
		text-align: center;
		width: 60%;
		margin: auto !important;
		height: 100%;
  		display: block;
	}
	header {
		background-color: #982417;
		line-height: 80px;
		width: 80%;
		margin: auto !important;
		font-family: "Cooper-Black";
		color: white;
		text-shadow: 3px 3px 3px black;
		font-size: 20px;
		white-space: nowrap !important;
		overflow: hidden !important;
	}
	header, footer {
		line-height: 100px;
	}
	nav {

	}
	nav, content, aside {
		float: left;
	}
	nav, aside {
		display: inline-block;
		width: 10%;
		background-color: #ffeed6;
		color: #807944;
	}
	content {
		margin: auto;
		width: 80%;
	}
	content h2 {
		color: #900;
	}
	aside {
		/*background-color: #5b5962;*/
		/*color: #9f916b;*/
	}
	/*
	aside ul a {
		color: #dbd2a1;
		text-decoration: none;
	}
	aside ul a:hover {
		color: #dbd2a1;
		text-decoration: underline;
	}
	*/

	#main {
		background-color: #663a2a;
		height: 385px;
		width: 355px;
		color: white;
		text-align: center;
		font-family: "Bamberg";
		margin-left: auto !important;
		margin-right: auto !important;
		margin-bottom: 10px !important;
		line-height: 5px;
	}
	#main img, #main h2 {
		margin: auto !important;
	}
	#main a, #main a h3 {
		color: white;
		text-decoration: none;
	}
	#main a:hover, #main a:hover h3, #main a:hover .col-md-3, #main a:hover :not(.row)  {
		text-decoration: underline;
	}
	#main h1 {
		text-shadow: 1px 1px 1px #000, 3px 3px 5px black;
		font-family: "Cooper-Black";
		font-size: 55px;
	}
	#main h2 {
		background-color: #0e803f;
		color: yellow;
		width: 60%;
		border-radius: 10px;
		box-shadow: 3px 3px 5px black;
		font-family: "Clarendon";
		line-height: 20px;
	}
	#main h3 {
		font-size: 30px;
	}
	#main .col-md-3 {
		display: inline-block;
		font-size: 110%;
		margin-left: 5px !important;
		margin-right: 5px !important;
	}

	footer {
		clear: both;
		height: 100px;
		width: 80%;
		margin: auto !important;
		background-color: #982417;
		color: #f93;
		text-transform: uppercase;
		font-size: 16px;
	}
	footer a, footer a:visited {
		color: #f93;
		text-decoration: none;
	}
	footer a:hover {
		text-decoration: underline;
	}


	/*
	ul {
		list-style-type: none;
		margin: 0px !important;
		padding: 0px !important;
		padding-left: 0px !important;
		background-color: #76693c;
	}
	li {
		list-style-type: none;
		border-bottom: 1px solid #9f916b;
		margin: 0px !important;
		padding: 0px !important;
	}
	#select {
		height: 120px;
		line-height: 105px;
		background: #5b5962;
	}
	*/



	/* overlay */
	iframe {
		position: absolute;
	}
	.overlay {
		display: none;
		position: absolute;
		z-index: 2;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
		background-color: rgba(0, 0, 0, 0.75);
	}
	#map {
		width: 60%;
		height: 60%;
		margin: auto;
		padding: 0;
		position: relative;
		z-index: 3;
	}
	.glyphicon {
		margin-right: 3px;
	}
	.popover-content {
		color: black;
	}
	</style>
	<script type='text/javascript'>

	var delay = 400,
		$this,
		urls = {
			map: "https://www.google.com/maps/embed/v1/place?q=6125+University+Drive+NW,+Suite+D13+Huntsville,+AL+35806&key=AIzaSyAbeGAESvhWNvIEOUUwp1wGc-7omOA5XVA",
			menu: "menu.pdf",
			gallery: "gallery.php"
		}
	$.fn.center = function() {
		$this = $(this);
		$this
			.width($("html").width() * .75)
			.height($("html").height() * .75)
			.left(($("html").width() - $this.width()) * .5)
			.top(($("html").height() - $this.height()) * .5)
		return this
	}
	$(document).on("click", "a", function(e) {
		if ($(this).href() === "#") {
			e.preventDefault()
			disableScroll()
			$("iframe").src(urls[$(this).attr("data-tab")])
			$("iframe").center()
			$(".overlay").fadeIn(delay).show()
		}
	})
	$(document).on("click", ".overlay", function(e) {
		e.preventDefault()
		$(".overlay").fadeOut(delay, function() {
			$(this).hide()
		})
	})
	function mobilize() {
		$("header, nav, aside").remove()
		$("content").before($("#main"))
		$("content h2").remove()
		$("#main").margin("10px 0 0 0")
		// $("container").width($("#main").width())
		$("container").width("100%").margin(0).padding(0)
		$("header, footer").css("line-height", 50).height(50)
		$("html, body, container").css("background-color", "#663a2a")
		$(".row").eq(0).prev("a").before($(".row").eq(0))
		$("footer").children().wrap("<div class='col-md-3'></div>")
		$("footer").children().wrapAll("<div class='row'></div>")
		$("#main").append($("footer").find(".row"))
		$("footer").remove()
	}
	$(function() {
		$("iframe").center()
		$("iframe").resizable()
		$('[data-toggle="popover"]').popover().mouseleave(function() {
			$(this).popover("hide")
			$(this).click()
		})
		// $('[data-tab="hours"]').click(function() {
		// 	$('[data-toggle="popover"]').popover('show')
		// })
		// 	$(document).on("mousemove", function() {
		// 		$('[data-toggle="popover"]').popover('hide')
		// 	})
		if ($(window).width() <= 600) {
			mobilize()
		}
		var clone = $("*").clone()
		$("nav, aside").height(function() {return $("content").height() })
		window.onresize = function() {
			if ($(window).width() <= 600) {
				mobilize()
			}
		}
	})
	</script>
	<head>
	<body>
		<container>
			<header>
				<h1>Big Bowl Thai Cuisine</h1>
			</header>
			<nav>
			</nav>
			<content>
				<h2>Fine Thai Dining in Northern Alabama</h2>
				<div id="main" class='container'>
					<img src="bigbowl.png">
					<h1>BIG BOWL</h1>
					<h2>Thai Cuisine</h2>
					<br /> <br /> <br /> <br /> <br />
					<div class='row'>
						<div class='col-md-3'>Dine-In</div>
						<div class='col-md-3'>Delivery</div>
						<div class='col-md-3'>Carry-Out</div>
						<div class='col-md-3'>Catering</div>
					</div>
					<!-- <h3>6125 University Drive NW</h3> -->
					<!-- <h3>Huntsville, AL 35806-1757</h3> -->
					<a href="#" data-tab="map">
						<h3>6125 University Drive</h3>
						<h3>Huntsville, AL 35806</h3>
					</a>
				</div>
			</content>
			<aside>
			</aside>
			<footer>
				<!-- <a href="tel:2564697664">(256) 469-7664</a> -->
				<!-- <a href="tel:2564696045">(256) 469-6045</a> -->

				<a href="tel:2569704122"><span class="glyphicon glyphicon-phone"></span>(256) 970-4122</a>
				&nbsp;
				&nbsp;
				<a
				data-tab="hours"
				data-placement="top"
				data-toggle="popover"
				data-content="Monday thru Friday, 11 AM to 9 PM
				Sunday, 11 AM to 8 PM">
				<span class="glyphicon glyphicon-time"></span>hours</a>
				&nbsp;
				&nbsp;
				<a href="#" data-tab="map"><span class="glyphicon glyphicon-road"></span>directions</a>
				&nbsp;
				&nbsp;
				<a href="#" data-tab="menu" data-width="700" data-height='700'><span class="glyphicon glyphicon-list-alt"></span>menu</a>
<!--
				&nbsp;
				&nbsp;
				<span class="glyphicon glyphicon-picture"></span>
				<a href="#" data-tab="gallery" data-width="700" data-height='700'>gallery</a>
-->
			</footer>
			<div class="overlay">
				<iframe frameborder="0" style="border:0;"></iframe>
			</div>
		</container>
	</body>
</html>
