<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Batalla Naval</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$filas = $_POST['filas'];
			$colum = $_POST['columnas'];

			echo "<table>";

			for($i=1;$i<=$filas;$i++){
				echo "<tr>";
				for($j=1;$j<=$colum;$j++){
					if(($j+$i)%2==0){
					echo "<td class='ncolor'></td>";
					}
					else{echo "<td class='color'></td>";}
				}
				echo "</tr>";
			}
			echo "</table>";	
		?>
	</body>
</html>