<?php
require_once('Connections/Speed.php');

$nom=$_POST['txtNom'];
$die=$_POST['txtDieta'];
$calo=$_POST['Calorias'];

$Vali_Dieta=mysqli_query($con,"SELECT Nombre FROM Dieta WHERE Nombre='$nom'");

//Nombre de Dieta 

if($Resu=mysqli_fetch_array($Vali_Dieta)){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dieta</title>
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
<form action="insertarDieta.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Dietas</h1>
	<h3 align="center">!Intentar de nuevo!</h3> 
    
    <div align="center">
	La dieta ya existe<br><br>
    Ingrese el nombre:<br>  
    <input type="text" name="txtNom" required="required"/>
    <p align="center">&nbsp;</p>
   </div>
    
    <div align="center">
    Ingrese la dieta:<br>  
    <p>
    	<textarea name="txtDieta" rows="10" cols="50" >
         <?php
		 echo $die;
		 ?>
        </textarea>
    </p>
    <p align="center">&nbsp;</p>
   </div>
   
    <div align="center">
    Ingrese el Calorias a perder:<br>  
    <input type="number" name="Calorias" required="required" placeholder="kcal" value="<?php echo $calo;?>"/>
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
mysqli_query($con,"insert into Dieta (Nombre,Dieta,Calorias) values('$nom','$die','$calo')")or die ("error query".mysqli_error($con));

		echo "<script>  
		alert('Dieta Insertada'); 
		window.location='insertarDieta.html';
		</script>";
}
	
?>