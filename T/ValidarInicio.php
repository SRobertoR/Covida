<?php

require_once('Connections/Speed.php'); 

		$ValidaCorreo=$_POST['ValidarCorreo'];
		$ValidaContra=$_POST['ValidarContra'];

		//if($Tipo == "Usuario"){
	$Resul=mysqli_query($con,"SELECT * FROM Usuario WHERE Correo='$ValidaCorreo' AND Contra='$ValidaContra'");	
	if($Resu=mysqli_fetch_array($Resul)){
			
		switch($Resu['Rol']){
				
		case "Usuario";
		header("location:interfazUsuario.html");
		break;
		case "Administrador";
		header("location:interfazAdministrador.html");
		break; 
		case "Entrenador";
		header("location:interfazEntrenador.html");
		break; 
		} 
						
	}else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-size: 18px;
}
body {
	background-image: url(images/IS.jpg);
	font-size: 16px;
}
#form1 .botones a strong {
	color: #0C3;
}
</style>
</head>

<body>

<font face="Arial" size="15" color="#FFFFFF">
<h1 align="center"><i>SpeedFull</i></h1>
</font>

<form id="form1" name="form1" method="post" action="ValidarInicio.php">

<h1 align="center"><strong>Iniciar Sesion</strong></h1>
<div align="center">
<h3>¡INTENTA DE NUEVO!</h3>
   <strong> Ingresa el correo</strong>
<input required="required" type="text" placeholder="ejemplo@correo.com" name="ValidarCorreo" id="textfield" />
</div>
<div align="center">
   	<strong>Ingresa Contraseña</strong>
<input required="required" type="password" placeholder="Contraseña" name="ValidarContra" id="textfield" />
</div>
<div align="center" class="botones">
  	<a href="FormularioRegistro.html"><strong>Registrate</strong></a>
   	<input type="submit" name="button" id="button" value="Iniciar Sesion" />
	
</div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>

<?php		
	}	
?>