<?
include "config.php";
$sql="SELECT img, title, price, id FROM catalog";
$res=mysqli_query($connect, $sql) or die('Ошибка выполнения запроса к базе данных');

while($data = mysqli_fetch_assoc($res)){
	echo "<div class='merchcatalog'>".
		"<a href='/merch.php?id=".$data[id]."'>".
			"<img src='".$data[img]."' alt=".$data[title]." width='300px'".
			"<p>".$data[title]."</p>".
			"<p>Цена ".$data[price]." руб.</p>".
		"</a>".
	"</div>";
}

