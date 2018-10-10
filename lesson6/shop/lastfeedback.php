<?
include "config.php";
$sql="SELECT name, message, date FROM feedback ORDER BY id DESC LIMIT 3";
$res=mysqli_query($connect, $sql) or die('Ошибка выполнения запроса к базе данных');

while($data = mysqli_fetch_assoc($res)){
	echo "<p>".$data[date]."<br>".$data[name]."<br>".$data[message]."</p>";
}
