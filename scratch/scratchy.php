<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="assets/icon.png">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
		<title>From Scratch</title>
	</head>
	<body>
		<a href="http://www.google.de/"><img src="assets/img.png"></a>
		<form action="ausgabe.php" method="post">
			Faktoren eingeben.
			<br>
			<label>Faktor 1: <input type="number" name="faktor1"/></label>
			<br>
			<label>Faktor 2: <input type="number" name="faktor2"/></label>
			<br>
			<button>Senden</button>
			<button type="reset">Zurücksetzen</button>
		</form>
		<br>
		<form action="ausgabe.php" method="post">
			Tabellengröße eingeben.
			<br>
			<label>Höhe  : <input type="number" name="height"/></label>
			<br>
			<label>Breite: <input type="number" name="width"/></label>
			<br>
			<label>Multiplikationstabelle<input type="checkbox" name="isMultiplicationTable"/></label>
			<br>
			<button>Senden</button>
			<button type="reset">Zurücksetzen</button>
		</form>
		<p>Es ist <?php echo date('l, d. F Y H:i:s'); ?> Uhr </p>
	</body>
</html>
