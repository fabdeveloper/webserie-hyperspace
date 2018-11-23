<?php 


//echo "cargando confwebReader.php...";
require '../conf/confwebReader.php';
//echo "cargado confwebReader.php.";


if(isset($_POST['destinoEmail'])){
	
	require 'ContactObject.php';
	$contactObject = new ContactObject();
	$contactObject->set($_POST);
	$contactObject->sendEmail();	
	
}
?>



<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $headTitle; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro"><?php echo $menuItem1; ?></a></li>
							<li><a href="#one"><?php echo $menuItem2; ?></a></li>
							<li><a href="#two"><?php echo $menuItem3; ?></a></li>
							<li><a href="#three"><?php echo $menuItem4; ?></a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1><?php echo $introTitulo; ?></h1>
							<p><?php echo $introDescripcion; ?></p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly"><?php echo $introBoton; ?></a></li>
							</ul>
						</div>
					</section>

				<!-- One -->

					
					<section id="one" class="wrapper style2 spotlights">
					
					<?php 	
					
						for ($i = 0; $i < $numItemGallery; $i++) {
						   echo $arrayItemsGallery[$i]->printItemGallery();					    
						}	
						
					?>					
						
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2><?php echo $title_sectionInfo; ?></h2>
							<p><?php echo $description_sectionInfo; ?></p>
							<div class="features">
							
					<?php 	
					
						for ($i = 0; $i < $numItemInfo; $i++) {
						   echo $arrayItemsInfo[$i]->printItemInfo();					    
						}	
						
					?>								

							</div>
							<ul class="actions">
								<li><a href="<?php echo $hrefButton_sectionInfo; ?>" class="button"><?php echo $textoButton_sectionInfo; ?></a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2><?php echo $title_sectionContact; ?></h2>
							<p><?php echo $description_sectionContact; ?></p>
							<div class="split style1">
								<section>
									<form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field half">
												<label for="phone">Phone</label>
												<input type="text" name="phone" id="phone" />
											</div>
											<div class="field">
												<label for="subject">Subject</label>
												<input type="text" name="subject" id="subject" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
										<input type="hidden" name="destinoEmail" value="<?php echo $emailto_formContact; ?>" >
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span><?php echo $address_sectionContact; ?></span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="<?php echo $hrefEmail_sectionContact; ?>"><?php echo $email_sectionContact; ?></a>
										</li>
										<li>
											<h3>Phone</h3>
											<span><?php echo $telephone_sectionContact; ?></span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
											
												<?php 													
													for ($i = 0; $i < $numItemSocial; $i++) {
													   echo $arrayItemsSocial[$i]->printItemSocial();					    
													}														
												?>							
												
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; <?php echo $companyName_footer; ?>. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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