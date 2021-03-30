<?php
require_once('Connections/Speed.php');

$Nombre=$_POST['txtNom'];
$Viejo_Nombre=$_POST['Viejo_nombre'];
$Calorias=$_POST['txtCal'];
$Ingre=$_POST['txtIngre'];

$img=$_FILES['Imagen']['name'];
$Ruta=$_FILES['Imagen']['tmp_name'];
$Destino="Fotos/".$img;
copy ($Ruta,$Destino);

mysqli_query($con,"UPDATE Alimentos SET Nombre='$Nombre',Foto='$Destino',Calorias='$Calorias',Ingredientes='$Ingre' Where Nombre='$Viejo_Nombre'");

mysqli_close($con);

		echo "<script>  
		alert('Alimento Actualizado'); 
		window.location='interfazEntrenador.html';
		</script>";
						
?>