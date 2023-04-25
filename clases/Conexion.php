<?php

class Conexion extends mysqli
{
	
	function __construct()
	{
		// 1er parametro el local, 2do el usuario, 3er la contraseña y 4to el nombre de la BD
		parent::__construct("localhost","root","","pelipop");
	}
}
?>