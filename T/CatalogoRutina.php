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
<tr align="center">
	<td><h3>Nombre</h3></td><td><h3>Rutina</h3></td><td><h3>Nivel</h3></td><td><h3>Tipo</h3></td>
</tr>
</thead>
<?php 
require_once('Connections/Speed.php');
$Rutina=mysqli_query($con,"SELECT * FROM Rutina");

while($Rut=mysqli_fetch_array($Rutina)){
?>	 

<tr align="center">
	
	<td><?php echo $Rut["Nombre"];?></td>
    <small><td><?php echo $Rut["Rutina"];?></td></p></small>
    <td><?php echo $Rut["Nivel"];?></td>
    <td><?php echo $Rut["Area"];?></td>

</tr>

<?php
}
?>

</Table>
<div/>
</form>
<style media="screen">
  body {
    background: #9E9E9E;
    font-family: Arial;
	margin:0;
	padding:0;
}
  #main-container{
	  display:flex;
	  justify-content:center;
	  align-items:center;
}
table{
	background-color: white;
	text-align:left;
	border-collapse:collapse;
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
