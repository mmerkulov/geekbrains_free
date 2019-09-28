<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var tryCount = 0;
		var answer = parseInt(Math.random() * 100);
		var maxTryCount = 3;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer");
		}

		function writeFunc(text){
			document.getElementById("info").innerHTML = text;
		}

		function hideElement(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;

			var userAnswer = readInt();
			if (userAnswer == answer){
				writeFunc("<b>Грац, получилось отгадать!</b>");
				hideElement("Button");
				hideElement("userAnswer");

			} else if (tryCount >= maxTryCount){
				writeFunc("Брат, ты проиграл!<br>Правильный ответ = " + answer);
				hideElement("Button");
				hideElement("userAnswer");
			}
			else if (userAnswer > answer){
				writeFunc("Вы ввели слишком большое число.<br>Попробуйте ещё раз угадать.<br>Введите число от 0 до 100.");
			}
			else if (userAnswer < answer){
				writeFunc("Вы ввели слишком маленькое число.<br>Попробуйте ещё раз угадать.<br>Введите число от 0 до 100.");	
			}
		}

	</script> 
</head>
<body>

<div class="content">
<?php
	include "menu.php"; 
?>

	<div class="contentWrap">
		<div class="content">
			<div class="center">
			
				<h1>Игра в угадайку</h1>
				
				<div class="box">
				
					<form method="GET">
						<p id="info">Угадайте число от 0 до 100</p>
						<input type="text" id="userAnswer">
						<br>
						<input type="submit" value="Погнали!" name="">
						<a href="#" onclick="guess();" id="Button">Погнали!</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; MVDRF 
</div>

</body>
</html>