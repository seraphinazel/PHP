<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Отзывы</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="img/logo.png" alt="logo"></a>
			</div>
		  	<div class="menu">
		     	<ul>
			   	 	<li><a href="index.html">Главная</a></li>
			    	<li><a href="catalog.php">Каталог</a></li>
			    	<li><a href="contacts.html">Контакты</a></li>
			    	<li><a href="feedback.php">Отзывы</a></li>
		      	</ul>
	    	</div>
		</div>
		<div class="bread">
			<a href="index.html">Главная&rarr;</a>
			<p class="bread">Отзывы</p>
		</div>
		<div style="clear:both;"> </div>

		<p><b>Мы ждем Ваших отзывов! Напишите нам!</b></p>
		<form method="post" action="sendfeedback.php">
		<fieldset>
			<input type="text" size="40" name="name" placeholder="Ваше имя">
			<input type="text" size="40" name="theme" placeholder="Тема сообщения">
			<textarea cols="75" rows="10" name="message"></textarea>
			<input type="submit" name="submit" value="Отправить">
			<input type="reset" value="Очистить форму">
		</fieldset>
		</form>

		<p><b>Последние отзывы</b></p>
		<p><?include "lastfeedback.php" ?></p>
	</div>
	<div class="footer">
		<p>
			&copy; Все права защищены
		</p>
	</div>
</body>
</html>