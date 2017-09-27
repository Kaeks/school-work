<!doctype html>
<html>
	<head>
		<title>Sorting in PHP - Output</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
	</head>
	<body>
		<table>
		<tr><th>Unsortierte Zahlen</th></tr>
		<?php
			//Unsortierte Zahlen ausgeben
			foreach($_POST as $val) {
				echo "<tr><td>$val</td></tr>\n";
			}
		?>
		</table>
		<br>
		<table>
		<tr><th>Sortierte Zahlen</th></tr>
		<?php
			//Array Keys entfernen
			//"num1" = 1 -> 0 = 1
			//eZer zum Durchgehen
			$input = array_values($_POST);
			$length = count($input);
			//Temporäre Variable für das Umtauschen
			$temp = "";
			for($i=0; $i<$length; $i++) {
				for($j=0; $j<$length-1; $j++) {
					if($input[$j] <= $input[$j+1]) {
						//passt
					} else {
						//passt nicht
						$temp = $input[$j];
						$input[$j] = $input[$j+1];
						$input[$j+1] = $temp;
					}
				}
			}
			//Sortierte Zahlen ausgeben
			foreach($input as $val) {
				echo "<tr><td>$val</td></tr>\n";
			}
		?>
		</table>
		<br><br>
		<img src="assets/how.png" width="400px"/>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<img src="assets/funktionsweise.png" width="1500px"/>
	</body>
</html>