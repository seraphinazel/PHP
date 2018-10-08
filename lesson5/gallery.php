<?
include "config.php";
$sql="select * from images";
$res=mysqli_query($connect, $sql);

if(mysqli_num_rows($res)>0){
	while($data=mysqli_fetch_assoc($res)){ ?>
		<a href="<?=$data[adress]."fulls/".$data[name].".JPG"?>" target="blank">
  			<img src="<?=$data[adress]."minis/".$data[name]."_mini.JPG"?>" alt="" />
  		</a>
	<?}
}
?>


