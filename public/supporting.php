<?php

//$name = "supporting2";

$sheet = $_GET["supporting"];
$sheetname = "index";

switch($sheet){
	case 1:
		$sheetname = "supporting1";
		break;
	case 2:
		$sheetname = "supporting2";
		break;
	case 3:
		$sheetname = "supporting3";
		break;
	case 4:
		$sheetname = "supporting4";
		break;
	case 5:
		$sheetname = "supporting5";
		break;
	case 6:
		$sheetname = "supporting6";
		break;
	default:
		break;
	
}

require '../conf/SupportConfReaderObject.php'; //echo "cargado SupportConfReaderObject.php <br>";
$supportConfReaderObject = new SupportConfReaderObject();
$supportConfReaderObject->init();
$supportConfReaderObject->setActiveSheetByName($sheetname);
$supportConfReaderObject->load();


?>



<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $supportConfReaderObject->get_headTitle(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="<?php echo $supportConfReaderObject->get_hrefTitleMenu(); ?>" class="title"><?php echo $supportConfReaderObject->get_titleMenu(); ?></a>
				<nav>
					<ul>
						<li><a href="<?php echo $supportConfReaderObject->get_hrefItemMenu1(); ?>"><?php echo $supportConfReaderObject->get_textoItemMenu1(); ?></a></li>
						<li><a href="<?php echo $supportConfReaderObject->get_hrefItemMenu2(); ?>" class="active"><?php echo $supportConfReaderObject->get_textoItemMenu2(); ?></a></li>
						<li><a href="<?php echo $supportConfReaderObject->get_hrefItemMenu3(); ?>"><?php echo $supportConfReaderObject->get_textoItemMenu3(); ?></a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major"><?php echo $supportConfReaderObject->get_title(); ?></h1>
							<span class="image fit"><img src="<?php echo $supportConfReaderObject->get_pathImagen(); ?>" alt="" /></span>
							<p><?php echo $supportConfReaderObject->get_textoParrafo1(); ?></p>
							<p><?php echo $supportConfReaderObject->get_textoParrafo2(); ?></p>
						</div>
					</section>

			</div>


		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


