<?php
require_once('Connections/Speed.php');

$Tipo=$_POST['selectTipo'];

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
$Ejercicios=mysqli_query($con,"SELECT * FROM Ejercicios WHERE Tipo='$Tipo'");

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
