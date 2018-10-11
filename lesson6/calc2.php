<?
$num1 = $_POST['number3'];
$num2 = $_POST['number4'];
$operation = $_POST['submit'];

function mathOperation($arg1, $arg2, $operation) {
  switch($operation) {
    case '-':
      return($arg1-$arg2);
      break;
    case '*':
      return($arg1*$arg2);
      break;
    case '+':
      return($arg1+$arg2);
      break;
    case '/':
      if($arg2!=0){
        return($arg1/$arg2);
        break;
      }
      else {
        echo "На ноль делить нельзя!!!";
        break;
      }
    default:
      return NaN;
      break;
  }
}

echo mathOperation($num1, $num2, $operation[0]);