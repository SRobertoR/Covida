<?php
require_once('Connections/Speed.php');
$NomEje=$_POST['txt_Vali_Eje'];



$Vali_Eje=mysqli_query($con,"SELECT Nombre_Ejercicio FROM Ejercicios WHERE Nombre_Ejercicio='$NomEje'");

//Nombre de usuario 

if($Res=mysqli_fetch_array($Vali_Eje)){
	
mysqli_query($con,"DELETE FROM Ejercicios WHERE Nombre_Ejercicio='$NomEje'");
		
		echo "<script>  
		alert('Alimento Eliminato'); 
		window.location='BorrarEjercicio.html';
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

<form action="BorrarAli.php" method="post">
	<h1 align="center">BORRAR EJERCICIOS</h1>
    <div align="center">
    	<label for="textfield">¡Intente de nuevo!</label><br>
        <label for="textfield">Ingrese el nombre del Ejercicio:</label><br>
   	  <input required="required" type="text" name="txt_Vali_Eje" id="textfield" />
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