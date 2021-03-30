<?php
require_once('Connections/Speed.php');

$Nombre=$_POST['NomEje'];
$Viejo_Nombre=$_POST['Viejo_nombre'];
$Rep=$_POST['NumRep'];
$Tipo=$_POST['selectTipo'];

$img=$_FILES['Imagen']['name'];
$Ruta=$_FILES['Imagen']['tmp_name'];
$Destino="Ejercicios/".$img;
copy ($Ruta,$Destino);

mysqli_query($con,"UPDATE Ejercicios SET Nombre_Ejercicio='$Nombre',Imagen='$Destino',Repeticiones='$Rep',Tipo='$Tipo' Where Nombre_Ejercicio='$Viejo_Nombre'");

mysqli_close($con);

		echo "<script>  
		alert('Ejercicio Actualizado'); 
		window.location='interfazEntrenador.html';
		</script>";
						
?>