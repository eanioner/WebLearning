<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Movie Portal </title>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<header>
	<div id="logo"> 
		<a href="/" title="Перейти на главную"> 
			<span>M</span>ovies <span>P</span>ortal
		</a>
	 </div>

	<div id="menuHead"> 
		<a href="/about.php"> <div> О нас </div> </a>
		<a href="/feedback.php"> <div> Обратная связь </div> </a>
	</div>

	<div id="regAuth"> 

		<a href="/reg.php" >Регистрация  </a> |
		<a href= "/auth.php"> Авторизация </a>
	</div>
	</header>


	<div id="wrapper">
		<div id="leftCol">
			<div id="bigArticle">
				<img src="/img/article_1.png" alt="Статья 1" title="Статья 1">
				<h2> Статья 1 - Звездные войны </h2>
				<p>  Давным-давно, в далекой-далекой галактике судьбы множества планет определялись балансом «силы», энергетического поля, управление которым было подвластно немногим рыцарям-джедаям. В зависимости от выбираемого ими пути духовного развития и стороны силы, Светлой или Темной, джедаи способствовали поддержанию в галактике мира и порядка или, напротив, поддавались эгоистичным стремлениям и вносили в нее раздор и хаос. 
				</p>

				<a href="/article.php">
					<div> Далее... </div>
				</a>
			</div>
			<div class="clear"> <br /> </div>
			<div class="article"> 

			<img src="/img/article_2.jpg" alt="Статья 1" title="Статья 1">
				<h2> Статья 1 - Звездные войны </h2>
				<p>  Давным-давно, в далекой-далекой галактике судьбы множества планет определялись балансом «силы», энергетического поля, управление которым было подвластно немногим рыцарям-джедаям.
				</p>

				<a href="/article.php">
					<div> Далее... </div>
				</a>

			</div>
			<div class="article"> 
				<img src="/img/article_3.jpg" alt="Статья 1" title="Статья 1">
				<h2> Статья 1 - Звездные войны </h2>
				<p>  Давным-давно, в далекой-далекой галактике судьбы множества планет определялись балансом «силы», энергетического поля, управление которым было подвластно немногим рыцарям-джедаям. 
				</p>

				<a href="/article.php">
					<div> Далее... </div>
				</a>

			</div>

		</div>

		<div id="rightCol">
			<div class="banner">
				<img src="/img/banner_1.gif" alt="Баннер 1" title="Banner 1">
			</div>
			<div class="banner">
				<img src="/img/banner_2.jpg" alt="Баннер 2" title="Banner 2">
			</div>
		</div>
	</div>


	<footer>
		<div id="social">
			<a = href="http://vk.com" title="VK gruop" target="_blank" >
				<img src="/img/vk.png" alt="VK" title="VK">
			</a>
			<a = href="http://facebook.com" title="FB gruop" target="_blank" >
				<img src="/img/fb.png" alt="FB" title="FB">
			</a>
			<a = href="http://twitter.com" title="twitter gruop" target="_blank" >
				<img src="/img/twitter.png" alt="twitter" title="twitter">
			</a>
		</div>
		<div id="rights">
			Все права защищены &copy; <?=date('Y');?>
		</div>
	</footer>
</body>
</html>