<?php
	include("include/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Лабораторія пробірного аналізу</title>
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
		<h1>Лабораторія пробірного аналізу</h1>
		<p class="history">
			<a href="Geology and geochemistry of ore deposits.php">Геології і геохімії рудних родовищ</a>
		</p>
		<p class="history">
			<b>Відповідальна особа:</b>
		</p>
		<p class="history">
			Юшин Олександр Олександрович, (044) 424-05-70, <span class="sp">Jushyn@rambler.ru</span>
		</p>
		<p class="history">
			<i>Свідоцтво про атестацію лабораторії №ПТ-434 / 12, дійсне до 20.11.2017 р.</i>
		</p>
		<p class="history">
			<ul class="ul">
				<li>Пробірний аналіз з ICP закінченням порід і руд на золото (проби 500 г подрібнені до –0,1 мм. Чутливість аналізу 0,01 ppm).</li>
				<li>Пробірний аналіз з ICP закінченням на Pt і Pd (проби 500 г подрібнені до –0,1 мм. Чутливість визначення 0,01 ppm), або емісійним спектральним закінченням на Pt, Pd, Rh, Ir, Os, Ru (проби 500 г подрібнені до –0,1 мм. Чутливість визначення 0,003–0,1 ppm).</li>
				<li>Пробірний аналіз сплавів золота (наважка сплаву залежно від вмісту золота 0,1–0,5 г).</li>
			</ul>
		</p>
		<p class="history">
			<u>Оригінальні методичні розробки:</u>
		</p>
		<p class="history">
			<i>Юшин О.О., Степаненко В.Г., Рєзван К.А., Боровіков О.Я.</i> Методика виконання вимірювань масової частки золота в золото-срібних, золото-мідних і золото-срібно-мідних сплавах методом купелювання МВВ 081 / 12 – 0061-01 (свідоцтво УкрЦСМ про атестацію МВВ № 081 / 12-0061-01 від 26.12.2001р).
		</p>
		<p class="history">
			<i>Юшин О.О., Гнелицька З.Т., Резван К.А., Дмитренко Л.Г., Гуркова Г.А. </i>Методика виконання вимірювань масової частки золота в золото-срібних, золото-мідних і золото-срібно-мідних сплавах методом купелювання // Київ. ДПС Мінфіну України. – 2010. – 18 с. (Свідоцтво «Укрметртестстандарт» № МВВ 081/12-0668-09).
		</p>
	</div>
	<footer id="foot">
	</footer>
	</div>
</body>
</html>