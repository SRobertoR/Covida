<?php
require_once('Connections/Speed.php');

$Busca_Dieta=$_POST['txt_busca_Dieta'];

$Resultado=mysqli_query($con,"SELECT * FROM Dieta WHERE Nombre='$Busca_Dieta'");

if($Res=mysqli_fetch_array($Resultado)){
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
<form action="UpdateDieta.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Dietas</h1>
	<h3 align="center">Ingrese sus datos:</h3> 
    
    <div align="center">
    Ingrese el nombre:<br>  
    <input type="text" name="txtNom" required="required" value="<?php echo $Res['Nombre']?>"/>
    <input required type="hidden" name="Viejo_nombre" value="<?php echo $Res['Nombre'] ?>" />
    <p align="center">&nbsp;</p>
   </div>
    
    <div align="center">
    Ingrese la dieta:<br>  
    <p>
    	<textarea name="txtDieta" rows="10" cols="50">
        <?php
		echo $Res['Dieta'];
		?>
        </textarea>
    </p>
    <p align="center">&nbsp;</p>
   </div>
   
    <div align="center">
    Ingrese el Calorias a perder:<br>  
    <input type="number" name="Calorias" required="required" placeholder="kcal" value="<?php echo $Res['Calorias'] ?>"/>
    <p align="center">&nbsp;</p>
   </div>
    
    <div align="center">
  		<a href="interfazEntrenador.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Insertar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>

<?php	
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
<form action="ActualizarDieta.php" method="post">

	<h1 align="center">ACTUALIZAR DIETA</h1>
    <h1 align="center">¡Intenta de nuevo!</h1>
    <div align="center">
    	<label for="textfield">Ingrese el nombre de la dieta:</label><br><br>
   	  <input required="required" type="text" name="txt_busca_Dieta" id="textfield" />
    </div>
    <div class="botones" align="center">
   	  <a href="interfazEntrenador.html">Atras</a>
	  <input type="submit" name="button2" id="button2" value="Buscar" />
    </div>
</form>
</body>
</html>

<?php
}
?>