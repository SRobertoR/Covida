<?php
require_once('Connections/Speed.php');

$BuscaEje=$_POST['txt_busca_Eje'];

$Resultado=mysqli_query($con,"SELECT * FROM Ejercicios WHERE Nombre_Ejercicio='$BuscaEje'");

if($Res=mysqli_fetch_array($Resultado)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicios</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-size: 18px;
}
body {
	background-image: url(images/1.jpg);
}
#estilo-foto{
	padding:10px;
	background:red;
	width:180px;
	position:relative;
}
p{
	color:#fff;
	text-align:center;
	font-size:20px;	
}
#foto{
	left:c;
	top:20;
	right:0;
	bottom:0;
	width:100%;
	height:100%;
	opacity:0;
}
</style>
</head>
<body>
<form action="UpdateEje.php" method="post" enctype="multipart/form-data"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Ejercicios</h1>
	<h3 align="center">Ingrese los datos:</h3> 
    
    <div align="center">
    Ingrese el nombre del Ejercicio:<br>  
    <input type="text" name="NomEje" required="required" value="<?php echo $Res['Nombre_Ejercicio'] ?>" />
     <input required type="hidden" name="Viejo_nombre" value="<?php echo $Res['Nombre_Ejercicio'] ?>" />
    <p align="center">&nbsp;</p>
   </div>
   
    <div align="center">
    Ingrese el numero de Repeticiones:<br>  
    <input type="number" name="NumRep" required="required" value="<?php echo $Res['Repeticiones'] ?>"/>
    <p align="center">&nbsp;</p>
   </div>
   
<div align="center">
   	Seleccione el Tipo:<br>
    <select name="selectTipo" id="selectTipo" value="<?php echo $Res['Tipo'] ?>">
            <option value="Pierna y muslo">Pierna y Muslo</option>
            <option value="Brazo y Pecho">Brazo y Pecho</option>
            <option value="Espalda y hombros">Espalda y hombros</option>
            <option value="Abdomen">Abdomenabdomen</option>
            </select>
            <p align="center">&nbsp;</p>
</div>

   <div align="center">
   <div id="estilo-foto">
   <p>Igrese la Animacion</p>
   <input type="file" name="Imagen" required="required" id="foto"/>
  </div>
   </div>
     <p align="center">&nbsp;</p>
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
<form action="ActualizarEjercicio.php" method="post">

	<h1 align="center">ACTUALIZAR EJERCICIOS</h1>
    <div align="center">
    	<label for="textfield">¡Ingrese el nombre del Valido!</label>
   	  <input required="required" type="text" name="txt_busca_Eje"/>
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