@extends('layouts.header')
@section('title')
Рейтинг
@endsection
@section('content')
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
				
				<table>
					<tr>
						<th></th>
						<th>Фильмы</th>
						<th class="center">Год</th>
						<th class="center">Рейтинг</th>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/inter.png"></td>
						<td>1. <a href="show.html">Интерстеллар</a></td>
						<td class="center">2014</td>
						<td class="center rating">8.6</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/matrix.png"></td>
						<td>2. <a href="matrix.html">Матрица</a></td>
						<td class="center">1999</td>
						<td class="center rating">8.7</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/max.png"></td>
						<td>3. <a href="max.html">Безумный Макс</a></td>
						<td class="center">2015</td>
						<td class="center rating">8.1</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/cloud.png"></td>
						<td>4. <a href="cloud.html">Облачный атлас</a></td>
						<td class="center">2014</td>
						<td class="center rating">7.0</td>
					</tr>
				</table>
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