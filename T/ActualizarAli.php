<?php
require_once('Connections/Speed.php');

$Busca_Ali=$_POST['txt_busca_Ali'];

$Resultado=mysqli_query($con,"SELECT * FROM Alimentos WHERE Nombre='$Busca_Ali'");

if($Res=mysqli_fetch_array($Resultado)){
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
<form action="UpdateAli.php" method="post" enctype="multipart/form-data"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Alimentos</h1>
	<h3 align="center">Actualiza los datos:</h3> 
    
    <div align="center">
    Actualiza el nombre:<br>  
    <input type="text" name="txtNom" required="required" value="<?php echo $Res['Nombre'] ?>"/>
    <input required type="hidden" name="Viejo_nombre" value="<?php echo $Res['Nombre'] ?>" />
    <p align="center">&nbsp;</p>
   </div>
    <div align="center">  
    Actualiza las Calorias:<br>
    <input type="text" name="txtCal" required="required" placeholder="kcal."  value="<?php echo $Res['Calorias'] ?>"/>
    <p align="center">&nbsp;</p>
    </div>
    <div align="center">
    Actualiza los Ingredientes:<br> 
     <p><textarea name="txtIngre" required="required" value="<?php echo $Res['Ingredientes']?>"></textarea></p>
     <p align="center">&nbsp;</p>
   </div>
   <div align="center">
     Actualiza la imagen:<br>
      <input type="file" name="Imagen" required="required"/>
      <p align="center">&nbsp;</p>
  </div>
   
    <div align="center">
  		<a href="index.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Actualizar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>
<?php	
}else{
	
	//No esta intenta de nuevos

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
<form action="ActualizarAli.php" method="post">

	<h1 align="center">ACTUALIZAR ALIMENTOS</h1>
    <div align="center">
    	<label for="textfield">Ingrese el nombre del Alimento</label>
   	  <input required="required" type="text" name="txt_busca_Ali" id="textfield" />
    </div>
    <div class="botones" align="center">
   	  <a href="Menu_Inicio_Admi.html">Atras</a>
	  <input type="submit" name="button2" id="button2" value="Buscar" />
    </div>
</form>
</body>
</html>
<?php
}
?>