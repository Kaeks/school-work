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
			//Zahlen herausnehmen
			foreach($_POST as $val) {
				if(is_numeric($val)) {
					$input[] = $val;
					//Unsortierte Zahlen ausgeben
					echo "<tr><td>$val</td></tr>\n";
				}
			}
		?>
		</table>
		<br>
		<table>
		<tr><th>Sortierte Zahlen</th></tr>
		<?php
			$output = [];
			$length = count($input);
			if($_POST["algorithm"] == "Bubblesort") {
				//Temporäre Variable für das Umtauschen
				$temp = "";
				for($i=0; $i<$length; $i++) {
					for($j=0; $j<$length-1; $j++) {
						if($input[$j] > $input[$j+1]) {
							$temp = $input[$j];
							$input[$j] = $input[$j+1];
							$input[$j+1] = $temp;
						}
					}
				}
				$output = $input;
			} elseif($_POST["algorithm"] == "Insertion Sort") {
				/*
				dude i dont get it anything i do doesnt work
				*/
			} elseif($_POST["algorithm"] == "Selection Sort") {
				$smallest = "";
				for($i=0; $i<$length; $i++) {
					$smallest = $input[$i];
					for($j=$i+1; $j<$length-1; $j++) {
						if($input[$j] < $smallest) {
							$smallest = $input[$j];
						}
					}
					$output = array_push($output, $smallest); // <-- ???? why is it null
				}
			}
			//Sortierte Zahlen ausgeben
			foreach($output as $val) {
				echo "<tr><td>$val</td></tr>\n";
			}
		?>
		</table>
		<?php $method = $_POST["algorithm"]; echo "Sorted using $method."; ?>
	</body>
</html>
