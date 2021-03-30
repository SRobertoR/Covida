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
	<td>Imagen:</td><td>Nombre</td><td>Calorias</td><td>Ingredientes</td>
</tr>
</thead>
<?php 
require_once('Connections/Speed.php');
$Alimentos=mysqli_query($con,"SELECT * FROM Alimentos");

while($Ali=mysqli_fetch_array($Alimentos)){
?>	 

<tr>
	<td>
	<?php echo '<img src="'.$Ali["Foto"].'" width="200" height="100"><br>'; ?>
    </td>
	<td>
    <!-- <p>Nombre:<br> -->
	<?php echo $Ali["Nombre"]."<br>";?>
	</td>
	<td>
	<!-- <p>Calorias:<br> -->
	<?php echo $Ali["Calorias"]; echo"kcal." ?>
    </td>
	<td>
    <!--<p>Ingredientes:<br> -->
	<?php echo $Ali["Ingredientes"]."<br>"; ?>
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
