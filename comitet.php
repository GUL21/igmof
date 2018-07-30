<!DOCTYPE html>
<html>
<head>
	<title>Комітет по метеоритах</title>
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
				<li><a href="contacts.php">Контакти</a></li>
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
		<h1>Комітет по метеоритах</h1>
		<p class="mail"><span class="italic">Голова Комітету - </span>доктор геол.-мін. наук Семененко Віра Пантелеївна</p>
		<p class="mail"><span class="italic">Вчений секретар - </span>Гіріч Аеліта Леонідівна</p>
		<p class="mail"><span class="italic">Секретар - </span>Кичань Наталія Володимирівна</p>
		<p class="mail"><span class="bold">Контакти: </span>тел. (044) 424-04-41;  ((099) 156-13-30  - Кичань Наталія Володимирівна)</p>
		<br>
		<p class="mail">e-mail: <span class="comit">cosmin@i.ua</span></p>
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>