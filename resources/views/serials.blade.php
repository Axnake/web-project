@extends('layouts.header')
@section('title')
Сериалы
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
				<div class="info_film">
					<img src="assets/img/breakingbad.png">
					«Во все тяжкие» — американская телевизионная криминальная драма, транслировавшаяся с 20 января 2008 года по 29 сентября 2013 года по кабельному каналу AMC. На протяжении пяти сезонов, состоящих из 62 эпизодов, показана история Уолтера Уайта, школьного учителя, у которого диагностировали неоперабельный рак лёгких.
					<div class="button"><a href="/breakingbad">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/dead.png">
					«Ходя́чие мертвецы́» — американский постапокалиптический телесериал, разработанный Фрэнком Дарабонтом, основанный на одноименной серии комиксов, созданной Робертом Киркманом, Тони Муром и Чарли Адлардом. В центре сюжета небольшая группа людей, пытающаяся выжить во время зомби-апокалипсиса.
					<div class="button"><a href="/dead">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/silicon.png">
					«Кремниевая долина» — американский комедийный сериал, созданный Дэйвом Крински, Джоном Альтшулером и Майком Джаджем о бизнесе в кремниевой долине. Премьера телесериала состоялась 6 апреля 2014 года на телеканале HBO.
					<div class="button"><a href="/silicon">Cмотреть</a></div>
				</div>
				<div class="info_film">
					<img src="assets/img/xfiles.png">
					«Секре́тные материа́лы» — американский научно-фантастический телесериал, созданный Крисом Картером. Показ стартовал 10 сентября 1993 года и завершился 21 марта 2018 года. За это время были сняты 218 серий.
					<div class="button"><a href="/xfiles">Cмотреть</a></div>
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