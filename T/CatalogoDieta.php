<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Usuarios</title>
<link rel="stylesheet">

</head>

<body>
	<div id="main-container">

<form method="post">
<Table>
<thead>
<tr align="center">
    <td><h3>Nombre</h3></td><td><h3>Dieta</h3></td><td><h3>Calorias a perder</h3></td>
</tr>
</thead>
<?php 
require_once('Connections/Speed.php');
$Dieta=mysqli_query($con,"SELECT * FROM Dieta");

while($Die=mysqli_fetch_array($Dieta)){
?>	 

<tr align="center">
	
	<td>
	<?php echo $Die["Nombre"]."<br>";?></p>
	</td>    
    <td width="650">
	<small><?php echo $Die["Dieta"]."<br>";?></p></small>
	</td>
	<td>
	<?php echo $Die["Calorias"]."<br>";?></p>
	</td>
</tr>

<?php
}
?>

</Table>
</form>
</div>
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
