<?php
	/**
	*Funcion que multiplica dos numeros
	*
	*Funcion que recibe dos parametros de tipo numero y 
	*realiza la multiplicacion de ambos y la devuelve.
	*
	*@author Pedro Gallardo Linares
	*@param Integer $num1 primer parametro de entrada de tipo numerico
	*@param Integer $num2 segundo parametro de entrada de tipo numerico
	*@return Integer $producto valor numerico que devuelve la funcion
	*@version 1
	*/
	function multiplicar($num1,$num2){
		$producto = $num1*$num2;		
		return $producto;
	}	
	/**
	*Funcion que recibe el nombre y los apellidos de un alumno/a
	*
	*Funcion que al pasarle dos datos de tipo Stirng, el  nombre y los apellidos,
	*va a devolver una cadena de texto enlazando ambos parametros y va a especificar
	*que dicho alumno estudia DAW.
	*
	*@author Pedro Gallardo Linares
	*@param String $nombre parametro de tipo String para el nombre del alumno
	*@param String $apellidos parametro de tipo String para los apellidos, ambos 
	*apellidos se van a recibir en el mismo parametro, por si algún alumno tiene un apellido.
	*@return String $cadena variable de tipo String que devuelve los datos pertinentes.
	*@version 1
	*/
	function datos($nombre, $apellidos){
		$cadena ="El alumno:". $apellidos . "," . $nombre. "estudia DAW.";
		return $cadena;
	}
	/**
	*@internal Con esta etiqueta se permite crear anotaciones solo para desarroladores
	*/
?>
