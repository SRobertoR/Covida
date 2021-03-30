<?php
require_once('Connections/Speed.php');
$NomAl=$_POST['txt_Vali_producto'];

$Resultado=mysqli_query($con,"SELECT Nombre FROM Alimentos WHERE Nombre='$NomAl'");

if($Res=mysqli_fetch_array($Resultado)){

mysqli_query($con,"DELETE FROM Alimentos WHERE Nombre='$NomAl'");
		
		echo "<script>  
		alert('Alimento Eliminato'); 
		window.location='BorrarAlimentos.html';
		</script>";

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
	background-image: url(images/1.jpg);
}
</style>
</head>
<body>
	<font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>

<form action="BorrarProducto.php" method="post">
	<h1 align="center">BORRAR ALIMENTOS</h1>
    <div align="center">
    	<label for="textfield">¡Por favor intenta de nuevo!</label><br>
        <label for="textfield">Ingrese el nombre del alimento existente:</label><br>
   	  <input required="required" type="text" name="txt_Vali_producto" id="textfield" />
    </div>
    <div class="botones" align="center">
   	  <a href="interfazEntrenador.html">Atras</a>
	  <input type="submit" name="button2" id="button2" value="Eliminar" />
    </div>
</form>
</body>
</html>
<?php
}
?>