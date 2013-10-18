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
	<?php 
		error_reporting(E_ALL);
		class Formulario {
			private $_boton;
			private $_arch;
			private $_array=array();
			private $_arrayNames=array();

			public function __construct($archivo, $nombreBoton){
				$this->_boton=$nombreBoton;
				$this->_arch= $archivo;
			}
			
			public function insertarCampos($a, $name){
				array_push($this->_array, $a);
				array_push($this->_arrayNames, $name);
			}
			public function creaFormulario(){
				echo '<form action="'.$this->_arch.'" method="post"> ';
				for($i=0 ; $i<count($this->_array) ; $i++){
					echo $this->_array[$i].':<br> <input name="'.$this->_arrayNames[$i].'" type="text" value="'.$this->_array[$i].'" /><br>';
				}
				echo '<input type="submit" id ="'.$this->_boton.'" value="'.$this->_boton.'"/>';
				echo '</form>';
			}
			

		}
	echo '<h1>Calcula el resultado de ecuaciones de segundo grado:<br></h1>';
	echo '<img src="2grado.gif">';
	$nuevoForm=new Formulario("gracias.php", "Calcular");
	$nuevoForm->insertarCampos("T&eacute;rmino A", "a");
	$nuevoForm->insertarCampos("T&eacute;rmino B", "b");
	$nuevoForm->insertarCampos("T&eacute;rmino Independiente", "independiente");
	$nuevoForm->creaFormulario();
	


	?>
	</div>
</body>
</html>
