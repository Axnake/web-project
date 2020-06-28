@extends('layouts.header')
@section('title')
Фильмы и сериалы
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
				@foreach($films as $film)
				<div class="info_film">
					<img src={{$film->img_url}}>
					<h1>{{$film->title}}</h1>
					{{$film->description}}
					<div class="button"><a href="{{$film->video_url}}">Cмотреть</a></div>
				</div>
				@endforeach
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