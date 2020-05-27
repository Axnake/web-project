<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Фильмы</title>
	<meta name="description" content="Смотри.Кино - кино портал" />
	<meta name="keywords" content="фильмы, фильмы онлайн, hd" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="main">
		<div class="header">			
			<div class="logo">				
				<div class="logo_text">		
					<h1><a href="/index">Смотри.Кино</a></h1>		
					<h2>Кино - это наша страсть</h2>
				</div>
			</div>			
			<div class="menubar">
				<ul class="menu">					
				<li><a href="/index">Главная</a></li>
				<li class="selected"><a href="/films">Фильмы</a></li>
				<li><a href="/serials">Сериалы</a></li>
				<li><a href="/rating">Рейтинг фильмов</a></li>
				<li><a href="/contact">Контакты</a></li>
				</ul>
			</div>			
		</div>
		<div class="site_content">
			<div class="sidebar_container">
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method="post" action="#" id="search_form">
						<input type="search" name="search_field" placeholder="Ваш запроос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>
				<div class="sidebar">
					<h2>Вход</h2>
					<form method="post" action="#" id="login">
						<input type="text" name="login_field" placeholder="логин" />
						<input type="password" name="password_field" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
							<span><a href="#">забыли пароль?</a></span> | <span><a href="#">регестрация</a></span>
						</div>
					</form>
				</div>
				<div class="sidebar">
					<h2>Новости</h2>
					<span>07.04.2020</span>
					<p>Мы запустили расширенный поиск</p>
					<a href="#">читать</a>
				</div>
				<div class="sidebar">
					<h2>Рейтинг фильмов</h2>
					<ul>
						<li><a href="/matrix">Матрица</a><span class="rating_sidebar">8.7</span> </li>
						<li><a href="/max">Безумный Макс</a><span class="rating_sidebar">8.1</span> </li>
						<li><a href="/show">Интерстеллар</a><span class="rating_sidebar">8.6</span> </li>
						<li><a href="#">Крестный отец</a><span class="rating_sidebar">9.0</span> </li>
						<li><a href="#">Начало</a><span class="rating_sidebar">8.7</span> </li>
						<li><a href="#">Помни</a><span class="rating_sidebar">8.2</span> </li>
					</ul>	
				</div>
			</div>
			<div class="content">
				<div class="info_film">
					<img src="assets/img/inter.png">
					Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и переселить человечество на другую планету.
					<div class="button"><a href="/show">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/max.png">
					Преследуемый призраками беспокойного прошлого Макс уверен, что лучший способ выжить - скитаться в одиночестве. Несмотря на это, он присоединяется к бунтарям, бегущим через всю пустыню на боевой фуре, под предводительством отчаянной Фуриосы. Они сбежали из Цитадели, страдающей от тирании Несмертного Джо, и забрали у него кое-что очень ценное. Разъярённый диктатор бросает все свои силы в погоню за мятежниками, ступая на тропу войны - дорогу ярости.
					<div class="button"><a href="/max">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/cloud.png">
					Шесть историй - пять реинкарнаций, происходящих в разное время, тесно переплетаются между собой...
					<div class="button"><a href="/cloud">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/matrix.png">
					Жизнь Томаса Андерсона разделена на две части: днём он - самый обычный офисный работник, получающий нагоняи от начальства, а ночью превращается в хакера по имени Нео, и нет места в сети, куда он не смог бы дотянуться. Но однажды всё меняется — герой, сам того не желая, узнаёт страшную правду: всё, что его окружает — не более, чем иллюзия, Матрица, а люди — всего лишь источник питания для искусственного интеллекта, поработившего человечество.
					<div class="button"><a href="/matrix">Cмотреть</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>
			<a href="/index">Главная</a> |
			<a href="/films">Фильмы</a> |
			<a href="/serials">Сериалы</a> |
			<a href="/rating">Рейтинг фильмов</a> |
			<a href="/contact">Контакты</a>
		</p>
		<p>Смотри-Кино.com 2020</p>
	</div>
</body>
</html>