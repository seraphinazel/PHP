<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Каталог</title>
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
			<p class="bread">Каталог</p>
		</div>
		<div style="clear:both;"> </div>
		
		<?include "showcatalog.php" ?>

	</div>
	<div class="footer">
		<p>
			&copy; Все права защищены
		</p>
	</div>
</body>
</html>