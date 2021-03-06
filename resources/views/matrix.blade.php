@extends('layouts.header')
@section('title')
Матрица
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
					<h1>Матрица</h1>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YihPA42fdQ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="info_film_page">
						<span class="label">рейтинг: </span><span class="value"> 8.7 / 10</span>
						<span class="label">год: </span><span class="value">1999</span>
						<span class="label">режиссер: </span><span class="value">Братья Вачовски</span>
					</div>
					
					<hr>

					<h2>Описание фильма</h2>
					<div class="description_film">
						<img src="assets/img/matrix.png">
						Жизнь Томаса Андерсона разделена на две части: днём он - самый обычный офисный работник, получающий нагоняи от начальства, а ночью превращается в хакера по имени Нео, и нет места в сети, куда он не смог бы дотянуться. Но однажды всё меняется — герой, сам того не желая, узнаёт страшную правду: всё, что его окружает — не более, чем иллюзия, Матрица, а люди — всего лишь источник питания для искусственного интеллекта, поработившего человечество. И только Нео под силу изменить расстановку сил в этом чужом и страшном мире.
					</div>
					
					<hr>

					<h2>Отзывы о фильме</h2>

					<div class="reviews">
						
						<div class="reviews_name">
							Максим
						</div>
						
						<div class="review_text">
						Отлично!
						</div>
					
					</div>

					<div class="reviews">
						
						<div class="reviews_name">
							Кирилл
						</div>
						
						<div class="review_text">
						Прекрасно!
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