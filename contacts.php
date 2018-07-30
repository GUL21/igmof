<!DOCTYPE html>
<html>
<head>
	<title>Контакти</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div id="block-body">
	<header id="head">
		<div id="nav">
			<ul>
				<li><a href="index.php">Головна</a></li>
				<li><a href="projects.php">Проекти</a></li>
				<li class="active"><a class="act" href="">Контакти</a></li>
			</ul>
		</div>
		<div id="block-header">
			<?php
				include("include/block-header.php");
			?>
		</div>
	</header>
	<div id="block-left">
		<?php
			include("include/block-left.php");
		?>
	</div>
	<div id="block-right">
		<?php
			include("include/block-right.php");
		?>
	</div>
	<div id="block-content">
		<h1>Контакти</h1><br>
		<p class="cont">пр. Акад. Палладіна, 34, м. Київ - 142, Україна, 03142.</p>
		<p class="cont">Тел. (38044) 501-1520, факс (38044) 501-1520</p>
		<p class="cont">e-mail: <span>office.igmr@gmail.com</span></p>
		<br>
		<h5>Місцезнаходження</h5>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.6099736108645!2d30.35478471511086!3d50.46698719405525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ccc08171d59b%3A0x477dd29382e52f8a!2z0L_RgNC-0YHQv9C10LrRgiDQkNC60LDQtNC10LzRltC60LAg0J_QsNC70LvQsNC00ZbQvdCwLCAzNCwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1532432154848" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>