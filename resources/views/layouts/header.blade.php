<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
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
				<li><a href="/films">Фильмы и сериалы</a></li>
				<li><a href="/rating">Рейтинг фильмов</a></li>
				<li><a href="/contact">Контакты</a></li>
				<li><a href="/reg">Регистрация</a></li>
				</ul>
			</div>			
		</div>

	@yield('content')

</body>
</html>