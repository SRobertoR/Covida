<?php
require_once('Connections/Speed.php');

$nom=$_POST['txtDieta'];


$Resultado=mysqli_query($con,"SELECT Nombre FROM Dieta WHERE Nombre='$nom'");

if($Res=mysqli_fetch_array($Resultado)){


mysqli_query($con,"Delete From Dieta where Nombre='$nom'")or die ("error query".mysqli_error($con));
echo "<script>
		alert('Dieta eliminada');
		window.location='eliminarDieta.html';
		</script>";
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dieta</title>
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
<form action="eliminarDieta.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Dietas</h1>
	<h3 align="center">Ingrese sus datos:</h3> 
    
    <div align="center">
    Ingrese un nombre de Dieta existente:<br>  
    <input type="text" name="txtDieta" required="required"/>
    <p align="center">&nbsp;</p>
   </div>
    
    <div align="center">
  		<a href="interfazEntrenador.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Eliminar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>
<?php
}
?>