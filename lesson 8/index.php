<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт Михаила Папкина от сайта GeekBrains</h1>

	<div class="center">
		<img src="img/photo1.jpg">

		<div class="box_text">
			<p><b>Добрый день!</b> Меня зову <i>Михаил Папкин</i>.
			Я хочу стать классным программистом, IT-шником.
			Это в общем-то прототип моего личного сайта.
			Welcom!
			</p>
			<p> В этом мне помог сайт <a href="https:\\geekbrains.ru">GeekBrains</a>.</p>
			<p>На этом сайте вы сможете сыграть в игры, которые я сам лично написал, еее!!!</p>
			<p> Вот мой список:
				<a href="#">Главная</a>
				<a href="#">Загадки</a>
				<a href="#">Угадайка</a>
				<a href="#">Генератор паролей</a>
			</p>
		</div>
	</div>
</div>


<div class="footer">
	Copyright &copy; <?php echo date("Y");?> MVDRF 
</div>

</body>
</html>