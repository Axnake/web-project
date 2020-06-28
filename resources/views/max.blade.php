@extends('layouts.header')
@section('title')
Безумный Макс
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
					<h1>Безумный Макс</h1>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/-3ZoAp6owdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="info_film_page">
						<span class="label">рейтинг: </span><span class="value"> 8.1 / 10</span>
						<span class="label">год: </span><span class="value">2014</span>
						<span class="label">режиссер: </span><span class="value">Джордж Миллер</span>
					</div>
					
					<hr>

					<h2>Описание фильма</h2>
					<div class="description_film">
						<img src="assets/img/max.png">
						Вскоре после отмщения за смерть жены и сына, Макс Рокатански покинул ряды «Основного силового патруля» и уехал в глушь, где скитается в одиночестве, пока мир медленно падает впоследствии нефтяного кризиса и глобальной войны. Не имея ничего, кроме своей машины «Перехватчик», Максу предстоит научиться, как выжить в пост-апокалиптической пустоши и сражаться с жестокими, безжалостными воинами, которые населяют её.
					</div>
					
					<hr>

					<h2>Отзывы о фильме</h2>

					<div class="reviews">
						
						<div class="reviews_name">
							Максим
						</div>
						
						<div class="review_text">
						Убойный и красивый экшен-фильм!
						</div>
					
					</div>

					<div class="reviews">
						
						<div class="reviews_name">
							Кирилл
						</div>
						
						<div class="review_text">
						Лучшая часть из всей серии!
						</div>
					
					</div>
				
					<div class="send">
						
						<form method="post" action="#" id="reviews">
							<input type="text" name="review_name" placeholder="ваше имя">
							<textarea name="review_text"></textarea>
							<input type="submit" value="отправить">

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
@endsection