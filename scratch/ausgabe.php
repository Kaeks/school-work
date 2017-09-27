<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="assets/icon.png"/>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
		<title>Top Secret</title>
	</head>
	<body>
		<div id="header"></div>
		<p>
			<?php
				// Check if variables exist. If yes, calculate the product.
				if(isset($_POST["faktor1"]) && isset($_POST["faktor2"])) {
					$produkt = $_POST["faktor1"] * $_POST["faktor2"];
					echo "Ergebnis: $produkt";
				}
				// Check if variables exist. If yes, generate a table.
				if(isset($_POST["width"]) && isset($_POST["height"])) {
					// Copying POSTed variables to this file for easier access.
					$width = $_POST["width"];
					$height = $_POST["height"];
					// Check if multiplication table check box is checked. (Does not POST if it is not checked, thus it checks if it has a value.)
					if(isset($_POST["isMultiplicationTable"])) {
						echo "Generating multiplication table with width $width and height $height.";
						// Open table.
						echo '<table>';
						for($i = 0; $i <= $height; $i++) {
							// Create table row.
							echo '<tr>';
							for($j = 0; $j <= $width; $j++) {
								if($i == 0 && $j == 0) {
									// Top left corner, generate '*' sign.
									echo '<th>*</th>';
								} else if($i == 0) {
									// Top row, generate factor 1.
									echo "<th>$j</th>";
								} else if($j == 0) {
									// Left column, generate factor 2.
									echo "<th>$i</th>";
								} else if($i != 0 && $j != 0) {
									// Calculate and generate multiplication results.
									$result = $i * $j;
									echo "<td>$result</td>";
								}
							}
							// Close table row.
							echo '</tr>';
						}
						// Close table.
						echo '</table>';
					} else {
						echo "Generating table with width $width and height $height.";
						echo '<table>';
						for($i = 0; $i < $height; $i++) {
							echo '<tr>';
							for($j = 0; $j < $width; $j++) {
								echo "<td>[$j|$i]</td>";
							}
							echo '</tr>';
						}
						echo '</table>';
					}
				}
			?>
		</p>
	</body>
</html>