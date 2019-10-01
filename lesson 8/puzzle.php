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

		<div class="center">
		
			<h1>Игра в загадки</h1>
			
			<div class="box">

				<?php
					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					if ($userAnswer == "сон" || $userAnswer == "сноведения"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if ($userAnswer == "морской"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer3"];
					if ($userAnswer == "шахматный" || $userAnswer == "мертвый"){
						$score++;
					}

					echo "Вы отгадали " . $score . " загадок!";

				?>

				<form method="GET">
					
					<p>Что можно увидеть закрытыми глазами?</p>
					<input type="text" name="userAnswer1">

					<p>Какой болезнью никто не болеет на суще?</p>
					<input type="text" name="userAnswer2">

					<p>Какой конь не ест овса?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
					</br>
				</form>
			</div>
		</div>
	</div>

<div class="footer">
	Copyright &copy; MVDRF 
</div>

</body>
</html>