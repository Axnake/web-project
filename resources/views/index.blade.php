@extends('layouts.header')
@section('title')
Главная
@endsection
@section('content')
		<div class="site_content">
			<div class="sidebar_container">
								<div class="sidebar">
					<h2>Поиск</h2>
					<form method="get" action="/search" id="search_form">
						<input type="search" name="search_field" placeholder="Ваш запроос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>
				<div class="sidebar">
					@if (!Auth::check())
					<h2>Вход</h2>
					<form method="get" action="/auth" id="login">
						<input type="text" name="login" placeholder="логин" />
						<input type="password" name="password" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
							<span><a href="#">забыли пароль?</a></span> | <span><a href="#">регестрация</a></span>
						</div>
					</form>
					@else
						<a href="/logout">выход</a>
					@endif
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
				
				<h1>Фильмы</h1>
				<div class="films_block">
					
					<a href="/matrix"><img src="assets/img/matrix.png"></a>
					<a href="/max"><img src="assets/img/max.png"></a>
					<a href="/show"><img src="assets/img/inter.png"></a>
					<a href="/cloud"><img src="assets/img/cloud.png"></a>

				</div>
				
				<h1>Сериалы</h1>
				<div class="films_block">
					
					<a href="/dead"><img src="assets/img/dead.png"></a>
					<a href="/silicon"><img src="assets/img/silicon.png"></a>
					<a href="/breakingbad"><img src="assets/img/breakingbad.png"></a>
					<a href="/xfiles"><img src="assets/img/xfiles.png"></a>

				</div>
				<div class="posts">
					
					<hr>
					<h2><a href="#">Как снимали Интерстеллар</a></h2>
					<div class="posts_content">
						
						<p>
							
						45 лет испольнилось Кристоферу Нолану - одному из самых успешных режиссеров нашего времени, чьи работы одинакого любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в прокате.
						</p>
					</div>
					<p><a href="#">читать</a></p>
										<hr>
					<h2><a href="#">Новости прямиком от автора</a></h2>
					<div class="posts_content">
						<p>
						Надеюсь не зря сидел старался
						</p>
					</div>
					<p><a href="#">читать</a></p>
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
	</div>
@endsection