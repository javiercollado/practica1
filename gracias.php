<!-- Copyright 2013 Javier Collado

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. -->
<!doctype html> 
<html lang="es">
<head>
	<style type="text/css" media="screen">
  		@import 'estilo.css';
	</style>
<meta charset="utf­8">
	<title>Resolver Ecuaci&oacute;nes de segundo grado</title> 
</head>
<body>
	<div class="contenedor">
		<h2>GRACIAS por utilizar nuestro sistema para resolver ecuaciones de segundo grado:</h2>
		<?php 
			error_reporting(E_ALL);
			$a=$_POST["a"];
			$b=$_POST["b"];
			$c=$_POST["independiente"];
			if(is_numeric($a) && is_numeric($b) && is_numeric($c)){

				echo 'Los datos introducidos son: <br> T&eacute;rmino a: '. $a . "<br> T&eacute;rmino b: ";
				echo $b."<br> T&eacute;rmino Independiente: ".$c."<br><br>";
				if ($a==0 && $b==0 && $c!=0){
					echo "NO hay solucion";
				}else if ($a==0 && $b!=0 && $c!=0){
					echo "Sólo tiene una solución: ".(-$c/$b)." .";
				}else if ($a!=0 && $b!=0 && $c!=0){
					$aux=pow ($b, 2)-(4*$a*$c);
					if ($aux<0){
						echo "Soluci&oacute;n Imaginaria";
					}
					if ($aux==0){
						echo "Solo tiene una soluci&oacute;n: ".(-$b/2*$a)." .";
					}
					if ($aux>0){
						echo "Tiene dos soluciones:<br>";
						echo "Soluci&oacute;n 1: ".((-$b+sqrt($aux))/(2*$a))." .<br>";
						echo "Soluci&oacute;n 2: ".((-$b-sqrt($aux))/(2*$a))." .<br>";
						echo '<a href="index.php">Volver a la p&aacute;gina de inicio</a>';
					}
				}
			}else{
				echo "Alguno de los valores introducidos no es num&eacute;rico <br>";
				echo '<a href="index.php">Volver a la p&aacute;gina de inicio</a>';
			}


		?>
	</div>
</body>
</html>