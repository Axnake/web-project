<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контакты</title>
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
				<li><a href="/films">Фильмы</a></li>
				<li><a href="/serials">Сериалы</a></li>
				<li><a href="/rating">Рейтинг фильмов</a></li>
				<li class="selected"><a href="/contact">Контакты</a></li>
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
				<h1>Контакты</h1>
				<p>Отправьте ваш отзыв о портале Смотри.Кино</p>
				<div class="send send_contact">	
					<form method="post" action="#" id="contact">
						<input type="text" name="review_name" placeholder="ваше имя">
						<input type="text" name="review_email" placeholder="ваш email">
						<textarea name="review_text"></textarea>
						<input class="btn" type="submit" value="отправить">
					</form>
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