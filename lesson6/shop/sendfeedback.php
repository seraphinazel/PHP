<?
$name = $_POST['name'];
$theme = $_POST['theme'];
$message = $_POST['message'];
$submit = $_POST['submit'];

include "config.php";
$sql="INSERT into feedback (name, theme, message) VALUES ('$name', '$theme', '$message')";
$res=mysqli_query($connect, $sql) or die('Ошибка выполнения запроса к базе данных');
?>
<a href="feedback.php">Отзыв успешно добавлен. Нажмите, чтобы вернуться и посмотреть</a>