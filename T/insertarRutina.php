<?php
require_once('Connections/Speed.php');

$nom=$_POST['txtNom'];
$rutina=$_POST['txtRutina'];
$niv=$_POST['txtNiv'];
$Tipo=$_POST['selectTipo'];


$Vali_Rutina=mysqli_query($con,"SELECT Nombre FROM Rutina WHERE Nombre='$nom'");

//Nombre de Rutina 

if($Resu=mysqli_fetch_array($Vali_Rutina)){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rutina</title>
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
<form action="insertarRutina.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Rutina</h1>
	<h3 align="center">Ingrese sus datos:</h3> 
    
    <div align="center">
    ¡Intenta con otro nombre!:<br>  
    <input type="text" name="txtNom" required="required"/>
    <p align="center">&nbsp;</p>
   </div>
   
   <div align="center">
    Ingrese el Rutina:<br>
    <p><textarea name="txtRutina" rows="10" cols="50" ><?php echo $rutina;?></textarea></p>
    <p align="center">&nbsp;</p>
   </div>
   
   <div align="center">
    Ingrese el nivel:<br>  
    <select name="txtNiv" id="selectEd">
            <option value="Principiante">Principiante</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
            </select>
    <p align="center">&nbsp;</p>
   </div>
   
   <div align="center">
   	Ingrese el area:<br>
    <select name="selectTipo" id="selectTipo">
            <option value="Pierna y Muslo">Pierna y Muslo</option>
            <option value="Brazo y Pecho">Brazo y Pecho</option>
            <option value="Espalda y hombros">Espalda y Hombros</option>
            <option value="Abdomen">Abdomenabdomen</option>
            </select>
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
mysqli_query($con,"insert into Rutina(Nombre,Rutina,Nivel,Area)  value('$nom','$rutina','$niv','$Tipo')");
echo "<script>  
		alert('Rutina insertada'); 
		window.location='insertarRutina.html';
		</script>";
}
?>