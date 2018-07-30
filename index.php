<!DOCTYPE html>
<html>
<head>
	<title>Інститут геохімії, мінералогії та рудоутворення ім. М.П. Семененка НАН України</title>
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
				<li class="active"><a class="act" href="index.php">Головна</a></li>
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
		<h1>Інформаційні повідомлення</h1>
		<ul id="minia">
			<li>
				<a href="">
					<img src="img/events.png" class="mini">
					<p>Події</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/field trip.png" class="mini">
					<p>Field trip</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/protection.png" class="mini">
					<p>Захист</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/conference.png" class="mini">
					<p>Конференції</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/readings.png" class="mini">
					<p>Наукові читання</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/election.png" class="mini">
					<p>Вибори директора</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/seminar.png" class="mini">
					<p>Семінари</p>
				</a>
			</li>
		</ul>
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>