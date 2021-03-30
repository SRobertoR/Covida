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
<tr>
	<td>Id Usuario</td><td>	Nombre</td><td>Sexo</td><td>Correo</td><td>Peso</td><td>Estatura</td><td>Edad</td><td>Rol</td><td>	Contraseña</td>
</tr>
</thead>
<?php 
require_once('Connections/Speed.php');
$Usuarios=mysqli_query($con,"SELECT * FROM Usuario WHERE Rol='Entrenador'");

while($Usu=mysqli_fetch_array($Usuarios)){
?>	 

<tr align="center">
	
	<td>
	<?php echo $Usu["Usuario_id"]."<br>";?></p>
	</td>
    <td>
	<?php echo $Usu["Nombre"]."<br>";?></p>
	</td>
    <td>
	<?php echo $Usu["Sexo"]."<br>";?></p>
	</td>
    <td>
	<?php echo $Usu["Correo"]."<br>";?></p>
	</td>
    <td>
	<?php echo $Usu["Peso"]."<br>";?></p>
	</td>
    <td>
	<?php echo $Usu["Estatura"]."<br>";?></p>
	</td>
     <td>
	<?php echo $Usu["Edad"]."<br>";?></p>
	</td>
     <td>
	<?php echo $Usu["Rol"]."<br>";?></p>
	</td>
     <td>
	<?php echo $Usu["Contra"]."<br>";?></p>
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
	  width: 100vw;
	  height:100vh;
}
/*
form{
 margin: 150px auto;
	  text-align:left;
	  max-width:800px;
	  width: 100%;
}*/	
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
