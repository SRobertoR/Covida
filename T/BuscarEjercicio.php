<?php
require_once('Connections/Speed.php');
$Tipo=$_POST['Buscar'];

$Vali_Eje=mysqli_query($con,"SELECT Nombre_Ejercicio FROM Ejercicios WHERE  Nombre_Ejercicio='$Tipo'");

if($Res=mysqli_fetch_array($Vali_Eje)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Catalogo</title>
<link rel="stylesheet">

</head>

<body>
	<div id="main-container">	
<form action="" method="get">
<Table>
<thead>
<tr>
	<td>Imagen:</td><td>Nombre</td><td>Numero de Repeticiones</td><td>Tipo</td>
</tr>
</thead>
<?php 
require_once('Connections/Speed.php');
$Ejercicios=mysqli_query($con,"SELECT * FROM Ejercicios WHERE Nombre_Ejercicio='$Tipo'");

while($Eje=mysqli_fetch_array($Ejercicios)){
?>	 

<tr>
	<td>
    <?php echo '<img src="'.$Eje["Imagen"].'" width="200" height="150"><br>'; ?>
    </td>
	<td>
    <!-- <p>Nombre:<br> -->
	<?php echo $Eje["Nombre_Ejercicio"]."<br>";?>
	</td>
	<td>
	<!-- <p>Calorias:<br> -->
	<?php echo $Eje["Repeticiones"]; echo" Veces" ?>
    </td>
	<td>
    <!--<p>Ingredientes:<br> -->
	<?php echo $Eje["Tipo"]."<br>"; ?>
	</td>
</tr>

<?php
}
?>
</Table>
	</div>  
</form>
<style media="screen">
  body {
    background: #9E9E9E;
    font-family: Arial;
}
  #main-container{
	  margin: 150px auto;
	  text-align:left;
	  width: 600px;
}
table{
	background-color: white;
	text-align:left;
	border-collapse:collapse;
	width:100px;
}

th,td{
	padding: 20px;	
}
thead{
	background-color: #646464;
	border-bottom:solid 5px #0F362D;
	color:white;
}
tr:nth-child(even){
	background-color:#ddd;
}
tr:hover td{ 
	background-color #369681:
	color:white;
}
</style>
</body>
</html>
<?php
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generar Rutina</title>
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
<form action="*" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">El EJERCICIO NO SE ENCUENTRA</h1>
 

        <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php
}
?>