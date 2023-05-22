<!DOCTYPE html>
<html>
	<head>
		<style>
			.err {
				color: red;
				font-size: 20px;
			}
		</style>
	</head>

	<body class="body">
		<form method="POST" action="form.php" class="form">
			<h1>Basic Arithmetic Calculstor</h1>

			<label for="num1">Number 1:</label> 
			<input type="text" name="num1" id="num1" required><br><br>

			<label for="num2">Number 2:</label>
			<input type="text" name="num2" id="num2" required><br><br>

			<label for="operator">Select Operation to do:</label><br>
			<input type="radio" name="operator" id="add" value="add" required>
			<label for="add">Addition</label><br>
			<input type="radio" name="operator" id="sub" value="sub" required>
			<label for="sub">Subtraction</label><br>
			<input type="radio" name="operator" id="div" value="div" required>
			<label for="div">Division</label><br>
			<input type="radio" name="operator" id="mul" value="mul" required>
			<label for="mul">Multiplication</label><br><br>

			<input type="submit" name="submit" value="Calculate">
		</form>
		<br><br>
	
    </body>
</html>

<?php	
error_reporting(0);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];

		if ($operator == "div" && $num2 == 0) {
			echo "<p class='err'>Division by zero is not possible</p>";
			return;
		} 
		
		if (!is_numeric($num1) && !is_numeric($num2)) {
			echo "<p class='err'>Invalid Input</p>";
			exit();
		}

		switch ($operator) {
			case "add":
				echo "The sum of $num1 and $num2 is: ".($num1+$num2);
				break;
			case "sub":
				echo "The difference of $num1 and $num2 is: ".($num1-$num2);
				break;
			case "div":
				echo "The division of $num1 and $num2 is: ".($num1/$num2);
				break;
			case "mul":
				echo "The multiplication of $num1 and $num2 is: ".($num1*$num2);
				break;
			default:
				echo "Invalid Operation";
		}
	}
?>
