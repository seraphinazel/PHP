<?
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$operation = $_POST['operation'];

function mathOperation($arg1, $arg2, $operation) {
  switch($operation) {
    case 'minus':
      return($arg1-$arg2);
      break;
    case 'mult':
      return($arg1*$arg2);
      break;
    case 'sum':
      return($arg1+$arg2);
      break;
    case 'div':
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

echo mathOperation($num1, $num2, $operation);