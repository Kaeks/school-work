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
			function swap($arr, $key1, $key2) {
				$temp = $arr[$key1];
				$arr[$key1] = $arr[$key2];
				$arr[$key2] = $temp;
				return $arr;
			}
			
			$output = array();
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
				for($i=0; $i<$length; $i++) {
					$temp = $input[$i];
					$j = $i-1;
					while($j >= 0 && $input[$j] > $temp) {
						$input[$j+1] = $input[$j];
						$j--;
					}
					$input[$j+1] = $temp;
				}
				$output = $input;
			} elseif($_POST["algorithm"] == "Selection Sort") {
				$smallest = "";
				for($i=0; $i<$length; $i++) {
					$smallest = $input[$i];
					for($j=$i; $j<$length; $j++) {
						if($input[$j]<$smallest) {
							$smallest = $input[$j];
							$ksmallest = $j;
						}
					}
					$input = swap($input, $i, $ksmallest);
				}
				$output = $input;
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
