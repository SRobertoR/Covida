<?php
require_once('Connections/Speed.php');

$Eje=$_POST['NomEje'];
$Rep=$_POST['NumRep'];
$Tipo=$_POST['selectTipo'];

$img=$_FILES['Imagen']['name'];
$Ruta=$_FILES['Imagen']['tmp_name'];
$Destino="Ejercicios/".$img;

copy ($Ruta,$Destino);

$Vali_Eje=mysqli_query($con,"SELECT Nombre_Ejercicio FROM Ejercicios WHERE Nombre_Ejercicio='$Eje'");

//Nombre de eje 

if($Resu=mysqli_fetch_array($Vali_Eje)){
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
<form action="insertarEje.php" method="post" enctype="multipart/form-data"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Ejercicios</h1>
	<h3 align="center">Ingrese los datos:</h3> 
    
    <div align="center">
    ¡Ingresa un nombre que no exista aun!<br>  
    Ingrese el nombre del Ejercicio:<br>  
    <input type="text" name="NomEje" required="required" value="<?php echo $Eje?>"/>
    <p align="center">&nbsp;</p>
   </div>
   
    <div align="center">
    Ingrese el numero de Repeticiones:<br>  
    <input type="number" name="NumRep" required="required" value="<?php echo $Rep?>"/>
    <p align="center">&nbsp;</p>
   </div>
   
<div align="center">
   	Seleccione el Tipo:<br>
    <select name="selectTipo" id="selectTipo" value="<?php echo $Tipo?>">
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
mysqli_query($con,"insert into Ejercicios (Nombre_Ejercicio,Repeticiones,Imagen,Tipo) 
values('$Eje','$Rep','$Destino','$Tipo')")or die ("error query".mysqli_error($con));

		echo "<script>  
		alert('Alimento insertado'); 
		window.location='InsertarEje.html';
		</script>";
}
?>