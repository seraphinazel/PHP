<?php 
//1
$a = -8;
$b = 2;

if ( $a >= 0 && $b >= 0 ) 
	echo $a - $b;
elseif ( $a < 0 && $b < 0 )
	echo $a * $b;
else
	echo $a + $b;

//2
echo "<br>"; //пробел для визуального отделения результата предыдущего задания

$a = rand(0,15);
switch($a)
{
	case 0:
		echo "0\n";
	case 1:
		echo "1\n";
	case 2:
		echo "2\n";
	case 3:
		echo "3\n";
	case 4:
		echo "4\n";
	case 5:
		echo "5\n";
	case 6:
		echo "6\n";
	case 7:
		echo "7\n";
	case 8:
		echo "8\n";
	case 9:
		echo "9\n";
	case 10:
		echo "10\n";
	case 11:
		echo "11\n";
	case 12:
		echo "12\n";
	case 13:
		echo "13\n";
	case 14:
		echo "14\n";
	case 15:
		echo "15\n";
		break;
	default:
		echo "0";
}

//3
function sum($a,$b) {
	return($a+$b);
}

function minus($a,$b) {
	return($a-$b);
}

function mult($a,$b) {
	return($a*$b);
}

function div($a,$b) {
	if($b!=0){
		return($a/$b);
	}
	else {
		echo "на ноль делить нельзя";
	}
}

//4
function mathOperation($arg1, $arg2, $operation) {
	switch($operation) {
		case 'minus':
			return minus($arg1,$arg2);
			break;
		case 'mult':
			return mult($arg1,$arg2);
			break;
		case 'sum':
			return sum($arg1,$arg2);
			break;
		case 'div':
			return div($arg1,$arg2);
			break;
		default:
			return NaN;
			break;
	}
}
echo "<br>"; //пробел для визуального отделения результата предыдущего задания

echo mathOperation(5,6,sum)."<br>";
echo mathOperation(5,6,minus)."<br>";
echo mathOperation(12,6,div)."<br>";
echo mathOperation(5,6,mult)."<br>";


//6
function power($val, $pow) {
	if($pow==1) {
		return $val;
	}
	if($pow>0) {
		$temp=$val*power($val, $pow-1);
		return $temp;
	} elseif ($pow<0) {
		return (1/$val) * (power($val, $pow+1));
	} else {
		return 1;
	}
}

echo "<br>"; //пробел для визуального отделения результата предыдущего задания
echo power(2,5);

/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
Вот тут уже не соображаю
*/
?>





