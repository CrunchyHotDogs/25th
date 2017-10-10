<!DOCTYPE html>

<?php
	//Start the session
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	include 'php_libs/database.php';
?>
<html>
	<head>
		<title>Debbie and Kevin</title>
		<noscript>
			<link rel='stylesheet' type='text/css' href='css/no-script.css' />
		</noscript>
	
		<link rel='icon' type='image/x-icon' href='images/misc/rings.ico' />
		<link href='https://fonts.googleapis.com/css?family=Righteous|Bangers|Boogaloo|Eagle+Lake' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' type='text/css' href='css/alertify.core.css' />
		<link rel='stylesheet' type='text/css' href='css/alertify.default.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' media='screen' />
		<link rel='stylesheet' type='text/css' href='css/print.css' media='print' />
		
		<script src='js/libs/jquery.js'></script>
		<script src='js/libs/alertify.js'></script>
	</head>
	<body>
		<noscript>
			<style type='text/css'>
				.body {
					display: none;
				}
			</style>
			<div class='no-script'>
				<div id='warped'>
					<span class='w0'>L</span>
					<span class='w1'>i</span>
					<span class='w2'>f</span>
					<span class='w3'>e</span>
					<span class='w4'>'</span>
					<span class='w5'>s</span>
					<span class='w6'> </span>
					<span class='w7'>t</span>
					<span class='w8'>o</span>
					<span class='w9'>o</span>
					<span class='w10'> </span>
					<span class='w11'>s</span>
					<span class='w12'>h</span>
					<span class='w13'>o</span>
					<span class='w14'>r</span>
					<span class='w15'>t</span>
					<span class='w16'>.</span>
					<span class='w17'> </span>
					<span class='w18'>I</span>
					<span class='w19'>t</span>
					<span class='w20'>'</span>
					<span class='w21'>s</span>
					<span class='w22'> </span>
					<span class='w23'>2</span>
					<span class='w24'>0</span>
					<span class='w25'>1</span>
					<span class='w26'>6</span>
					<span class='w27'>,</span>
					<span class='w28'> </span>
					<span class='w29'>e</span>
					<span class='w30'>n</span>
					<span class='w31'>a</span>
					<span class='w32'>b</span>
					<span class='w33'>l</span>
					<span class='w34'>e</span>
					<span class='w35'> </span>
					<span class='w36'>J</span>
					<span class='w37'>a</span>
					<span class='w38'>v</span>
					<span class='w39'>a</span>
					<span class='w40'>S</span>
					<span class='w41'>c</span>
					<span class='w42'>r</span>
					<span class='w43'>i</span>
					<span class='w44'>p</span>
					<span class='w45'>t</span>
					<span class='w46'> </span>
					<span class='w47'>o</span>
					<span class='w48'>r</span>
					<span class='w49'> </span>
					<span class='w50'>g</span>
					<span class='w51'>o</span>
					<span class='w52'> </span>
					<span class='w53'>h</span>
					<span class='w54'>o</span>
					<span class='w55'>m</span>
					<span class='w56'>e</span>
					<span class='w57'>.</span>
					
					<div class='owl'>
						<div class='owl-head'>
							<div class='owl-ears'></div>
							<div class='owl-eyes clearfix'>
								<div class='owl-eye owl-eye-left'></div>
								<div class='owl-eye owl-eye-right'></div>
							</div>
							<div class='owl-mouth'></div>
						</div>
						<div class='owl-body'>
							<div class='owl-wings'></div>
							<div class='owl-feathers'></div>
						</div>
						<div class='owl-legs'>
							<div class='owl-leg pull-left'></div>
							<div class='owl-leg pull-right'></div>
						</div>
						<div class='owl-tail'></div>
					</div>
				</div>
			</div>
		</noscript>

		<div class='body'>
			<?php include('header.php'); ?>
			<div class='content'>
				<?php include($contentPage); ?>
			</div>
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>

<?php
	if (isDatabaseConnected()) {
		closeConnection($link); //Closes the database connection. Location: PHPScripts/databaseConnect.php
	}
?>
