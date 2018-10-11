<!DOCTYPE html>
<html lang="ru">
<head>

	<?include "config.php";
	$sql="SELECT * FROM catalog WHERE id=$_GET[id]";
	$res=mysqli_query($connect, $sql) or die('Ошибка выполнения запроса к базе данных');
	$data = mysqli_fetch_assoc($res);
	?>


	<meta charset="UTF-8">
	<title><?=$data[title]?></title>
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
			<a href="catalog.php">Каталог&rarr;</a>
			<p class="bread"><?=$data[title]?></p>
		</div>
		<div style="clear:both;"> </div>
		
		<div class="merch">
			<a href="<?=$data[img]?>" target="blank">
				<img class="merch" src="<?=$data[img]?>" alt="<?=$data[title]?>" width="500px">
			</a>
			<p>Цена <?=$data[price]?> руб.</p>
		</div>
		<div class="merch">
			<ul class="character"><b>Характеристики товара</b>
				<li>Фирма: <?=$data[brand]?></li> 
				<li>Страна производитель: <?=$data[country]?></li>
				<li>Размер: <?=$data[size]?></li>
				<li>Вес: <?=$data[weight]?> гр</li>
				<li>Материал: <?=$data[material]?></li>
			</ul>
		</div>
		<div style="clear:both;"> </div>
		<form action="">
			<input class="buy" type="button" value="Купить">
		</form>
		
		<h3 class="merch">
			Подробное описание товара
		</h3>
		<p><?=$data[descr]?></p>
	</div>
	<div class="footer">
		<p>
			&copy; Все права защищены
		</p>
	</div>
</body>
</html>


