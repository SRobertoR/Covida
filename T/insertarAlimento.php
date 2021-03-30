<?php
require_once('Connections/Speed.php');

$nom=$_POST['txtNom'];
$cal=$_POST['txtCal'];
$ingre=$_POST['txtIngre'];
$img=$_FILES['Imagen']['name'];
$Ruta=$_FILES['Imagen']['tmp_name'];
$Destino="Fotos/".$img;

copy ($Ruta,$Destino);


$Vali_Ali=mysqli_query($con,"SELECT Nombre FROM Alimentos WHERE Nombre='$nom'");

//Nombre de Alimento 

if($Resu=mysqli_fetch_array($Vali_Ali)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
<form action="insertarAlimento.php" method="post" enctype="multipart/form-data"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Alimentos</h1>
	<h3 align="center">Ingrese sus datos:</h3> 
    
    <div align="center">
    ¡Alimento ya existente!<br>
    Ingrese el nombre:<br>
    <input type="text" name="txtNom" required="required"/>
    <p align="center">&nbsp;</p>
   </div>
    <div align="center">  
    Ingrese el Calorias:<br>
    <input type="text" name="txtCal" required="required" value="<?php echo $cal?>" placeholder="kcal." />
    <p align="center">&nbsp;</p>
    </div>
    <div align="center">
    Ingrese el Ingrediantes:<br> 
     <p><textarea name="txtIngre" required="required" value="<?php echo $ingre?>"></textarea></p>
     <p align="center">&nbsp;</p>
   </div>
      <div align="center">
     Ingrese su imagen:<br>
      <input type="file" name="Imagen" required="required"/>
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
mysqli_query($con,"insert into alimentos (Nombre,Calorias,Ingredientes,Foto) 
values('$nom','$cal','$ingre','$Destino')")or die ("error query".mysqli_error($con));

		echo "<script>  
		alert('Alimento insertado'); 
		window.location='Alimentos.html';
		</script>";
}
	
?>