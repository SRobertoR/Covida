<?php

class Conexion{
	
	public function conectarBD()
	{
		$con = mysqli_connect("localhost", "root", "", "speedfull")
			OR DIE ("Error en la conexión".mysqli_error($con));
			
		return $con;
	}
	
	public function cerrarBD()
	{
		mysqli_close($this->conectarBD());
	}
	
}
?>