<!doctype html>
<html>
	<head>
		<title>Sorting in PHP</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
	</head>
	<body>
		<p>Bitte 5 Zahlen eingeben:</p><br>
		<form action="output.php" method="post">
			<label><input name="num1" type="number"/></label><br>
			<label><input name="num2" type="number"/></label><br>
			<label><input name="num3" type="number"/></label><br>
			<label><input name="num4" type="number"/></label><br>
			<label><input name="num5" type="number"/></label><br>
			<select name="algorithm" size="3">
				<option>Bubblesort</option>
				<option>Insertion Sort</option>
				<option>Selection Sort</option>
			</select>
			<button type="submit">Senden</button>
		</form>
	</body>
</html>
