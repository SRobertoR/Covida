<?php
require_once('Connections/Speed.php');

$niv=$_POST['txtNiv'];
$area=$_POST['selectTipo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Rutina</title>
<link rel="stylesheet">

</head>

<body>
	<div id="main-container">	


<form method="post">
<Table>
<thead>
<tr>
	<td>Nombre</td><td>Rutina</td><td>Nivel</td>
</tr>
</thead>
<?php 

$Rutina=mysqli_query($con,"SELECT * FROM Rutina WHERE Nivel='$niv' and Area='$area'");

while($Rut=mysqli_fetch_array($Rutina)){
?>	 

<tr align="center">
	
	<td>
    <p>
	<?php echo $Rut["Nombre"]."<br>";?></p>
	</td>
    
    <td>
    <p>
	<?php echo $Rut["Rutina"]."<br>";?></p>
	</td>
    
    <td>
    <p>
	<?php echo $Rut["Nivel"]."<br>";?></p>
	</td>

</tr>

<?php
}
?>

</Table>
<div/>
</form>
<form action="BuscarEjercicio.php" method="post">
<div align="left">
<table>
<tr>
<h3>Buscar Ejercicio</h3>
<input type="text" name="Buscar" required>
<input type="submit" value="Buscar">
</tr>
</table>
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