<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>world bank</title>
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	 <!-- даты -->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css"> 
	<!-- ползунки -->
	<link rel="stylesheet" href="assets/css/jQuery-UI.css" type="text/css"> 
</head>
<body>
	<!-- шапка -->
	<header>
		<div class="head">
			<div>
				<img src="logo.png" alt = "logo" class="logo">
			</div>
			<div class="fone">
				<p>8-800-100-5005<br>+7(3452)522-000</p>
			</div>
		</div>
		<!-- меню -->
		<nav>
			<ul id="navbar">
				<li><a href="#">Кредитные карты</a></li>
				<li><a href="#">Вклады</a></li>
				<li><a href="#">Дебетовая карта</a></li>
				<li><a href="#">Страхование</a></li>
				<li><a href="#">Друзья</a></li>
				<li><a href="#">Интернет банк</a></li>
			</ul>
		</nav>
		<!-- хлебные крошки -->
		<ul class="breadCrumbs">
			<li><a href="#">Главная </a></li>
			<span>-</span>
			<li><a href="#">Вклады</a></li>
			<span>-</span>
			<li class="last"><a href="#">Калькулятор</a></li>
		</ul>
	</header>
	<!-- основной контент -->
	<div class="content">
		<!-- калькулятор -->
		<div class="culc">
			<form id="forma"> <!-- method="post" -->
				<div class="contentCulc">
					
						<div class="valueCulc position">
							<h1>Калькулятор</h1>
							<p>Дата оформления вклада<input class="dateReg" type="text" name="dateReg" id="datepicker" required placeholder="дд.мм.гггг"></p>
							<p>Сумма вклада
								<input type="number" min="1000" max="3000000" name="depositAmount" class="depositAmount" required placeholder="1тыс-3млн">
							</p>
							<p>Срок вклада
								<select name="termDeposit" required>
								  <option>1 год</option>
								  <option>2 года</option>
								  <option>3 года</option>
								  <option>4 года</option>
								  <option>5 лет</option>
								</select>
							</p>
							<p>Пополнение вклада
								<input class="depositRep no" name="depositRepNo" type="radio" value="no" checked="checked">нет
								<input class="depositRep yes" name="depositRepYes" type="radio" value="yes">да
							</p>
							<p>Сумма пополнения вклада<input type="number" min="1000" max="3000000" type="number" name="sumAmount" class="sumAmount" placeholder="1тыс-3млн"></p>
						</div>
						<!-- бегунки -->
						<div class="slideCulc position">
							<!-- С начала сделал сам, потом подключил библиотеку -->
							<!-- <input type="range" name="slide" min="1000" max="3000000" class="slide1 slide" id="polzunok"> -->
							<div class="slide1 slide"></div>
							<p>1 тыс. руб. <span>3 000 000</span></p>
							<!-- <input type="range" name="slide" min="1000" max="3000000" class="slide2 slide"> -->
							<div class="slide2 slide"></div>
							<p>1 тыс. руб. <span>3 000 000</span></p>
						</div>
					
				</div>
				<!-- Вычислить результат -->
				<div class="resultCulc">
					<p>
						<input class="subResult" type="submit" name="sub" value="Рассчитать"> Результат: <span class="res"></span>
					</p>
				</div>
			</form>
		</div>
	</div>
<!-- подвал -->
	<footer>
		<nav>
			<ul id="navbarFooter">
				<li><a href="#">Кредитные карты</a></li>
				<li><a href="#">Вклады</a></li>
				<li><a href="#">Дебетовая карта</a></li>
				<li><a href="#">Страхование</a></li>
				<li><a href="#">Друзья</a></li>
				<li><a href="#">Интернет банк</a></li>
			</ul>
		</nav>
	</footer>

<script src="assets/js/jquery.js"></script>
<!-- библиотека для работы с датами -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- библиотеки для работы с ползунками -->
<script src="assets/js/jQuery-UI.js"></script>
<script src="assets/js/jqueryTochSlider.js"></script>
<!-- мои скрипты -->
<script src="assets/js/script.js"></script>
<?php include 'calc.php';?>
</body>
</html>