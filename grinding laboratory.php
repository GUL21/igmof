<?php
	include("include/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Шліфувальна лабораторія</title>
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
		<h1>Шліфувальна лабораторія</h1>
		<p class="history">
			<a href="geochemistry of isotopes and mass spectrometry.php">Геохімії ізотопів і мас-спектрометрії</a>
		</p>
		<p class="history">
			<b>Відповідальна особа:</b>
		</p>
		<p class="history">
			Кушнір Сергій Володимирович, тел. (044) 424-11-42; (097) 368-82-94
		</p>
		<p class="history">
			Продукція і послуги шліфувальної лабораторії:
		</p>
		<p class="history">
			<ol class="ul">
				<li>Шліф петрографічний орієнтований, розмір – 20 х 20 та 18 х 18 мм, товщина 0,025 мм на бальзамі (покритий або не покритий).</li>
				<li>Шліф прозоро-полірований на епоксидній смолі, розмір – 20 х 20 та 18 х 18 мм, товщина 0,1–0,08 мм.</li>
				<li>Шліф палеонтологічний.</li>
				<li>Анщліф стандартний 20 х 20 та 18 х 15 мм.</li>
				<li>Прозоро-полірована пластина – 20 х 20 та 18 х 18 мм, товщина 1–0,1мм.</li>
				<li>Розпилювання зразків – 80 х 80 мм.</li>
				<li>Полірування зразків – 80 х 80 мм.</li>
			</ol>
		</p>
		<h2>Обладнання</h2>
		<p class="history">
			<ul>
				<li><img src="img/verstat-1.png"></li>
				<li><img src="img/verstat-3.png"></li>
				<li><img src="img/verstat-2.png"></li>
			</ul>	
		</p>
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>