<!DOCTYPE html>
<html>
<head>
	<title>Аспірантура, докторантура</title>
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
		<h1>Аспірантура, докторантура</h1>
		<p class="history">
			<a class="asp" href="pdf/pravyla.pdf">Правила прийому</a>
		</p>
		<p class="history">
			Документи подавати до 10 вересня за адресою: м. Київ, пр-т Акад. Палладіна, 34, кімн. №233
		</p>
		<p class="history">
			Години прийому - щодня з 14.00 до 17.00
		</p>
		<p class="history">
			Контактний телефон - (044) 594 30 22
		</p>
		<p class="history">
			<a class="asp" href="pdf/vidomosti.pdf">Відомості про навчально-методичне забезпечення освітньої діяльності</a>
		</p>
		<p class="history">
			<a class="asp" href="pdf/zabezp.pdf">Відомості про інформаційне забезпечення освітньої діяльності</a>
		</p>
		<p class="history">
			<a class="asp" href="pdf/ugoda.doc">Угода на проживання в гуртожитку НАН</a>
		</p>
		<img src="img/1.png" id="photo">
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>