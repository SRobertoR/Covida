<?php
require_once('Connections/Speed.php');

$nom=$_POST['txtUsu'];


$Resultado=mysqli_query($con,"SELECT Correo FROM Usuario WHERE Correo='$nom'");

if($Res=mysqli_fetch_array($Resultado)){

mysqli_query($con,"Delete From Usuario where Correo='$nom'")or die ("error query".mysqli_error($con));
echo "<script>
		alert('Usuario eliminado');
		window.location='EliminarUsuarios.html';
		</script>";
}else{
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-size: 18px;
}
body {
	background-image: url(images/1.jpg);
}
</style>
</head>
<body>
<form action="EliminarUsuarios.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Eliminar Usuarios</h1> 
    
    <div align="center">
    ¡Ingrese el Correo del Valido!:<br>  
    <input type="text" name="txtUsu" required="required"/>
    <p align="center">&nbsp;</p>
   </div>
    
    <div align="center">
  		<a href="interfazAdministrador.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Eliminar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>


<?php
}
?>