<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Lesson6</title>
</head>
<body>
	<table border='1' width='100%' height='100%'> 
		<tr>
			<td colspan='3'>Калькулятор 1</td>
		</tr>
		<tr>
			<td>
				<form method="post" action="calc1.php">
				    <label for="number1">Введите число</label>
				    <input type="number" name="number1"><br>
				    <label for="number2">Введите второе число</label>
				    <input type="number" name="number2"><br>
				    <p>
				    	<select size="1" name="operation">
						    <option disabled>Выберите операцию</option>
						    <option selected value="sum">Сложение</option>
						    <option value="minus">Вычитание</option>
						    <option value="mult">Умножение</option>
						    <option value="div">Деление</option>
					    </select>
					</p>
				    <input type="submit" value="Посчитать" name="submit">
			  	</form>
			</td>
		</tr>
		<tr>
			<td colspan='3'>Калькулятор 2</td>
		</tr>
		<tr>
			<td>
				<form method="post" action="calc2.php">
				    <label for="number3">Введите число</label>
				    <input type="number" name="number3"><br>
				    <label for="number4">Введите второе число</label>
				    <input type="number" name="number4"><br>
				    <input type="submit" value="+" name="submit[]">
				    <input type="submit" value="-" name="submit[]">
				    <input type="submit" value="*" name="submit[]">
				    <input type="submit" value="/" name="submit[]">
			  	</form>
			</td>
		</tr>
	</table>
</body>
</html>
