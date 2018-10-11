<?php
	$dir_mini = "img/minis";
	$minis = scandir("img/minis");
	$dir_full = "img/fulls";
	$fulls = scandir("img/fulls");

	for ($i = 2; $i < count($minis); $i++) { ?>
			<a href="<?=$dir_full."/".$fulls[$i]?>" target="blank">
  				<img src="<?=$dir_mini."/".$minis[$i]?>" alt="" />
  			</a>
  	<?php } ?>



