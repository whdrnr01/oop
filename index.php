<?php
declare(strict_types = 1);
include_once "inc/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<form action="inc/calc.inc.php" method="POST">
		<p>Calculator</p>
		<input type="number" name="num1" placeholder="First Number">
		<select name="oper">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="div">Division</option>
			<option value="mul">Mulitiplication</option>
		</select>
		<input type="number" name="num2" placeholder="Second Number">
		<button type="submit" name="submit">Calculate</button>
	</form>

</body>
</html>