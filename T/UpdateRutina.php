<?php
require_once('Connections/Speed.php');

$Nombre=$_POST['txtNom'];
$ViejoNom=$_POST['Viejo_nombre'];
$Rutina=$_POST['txtRutina'];
$Nivel=$_POST['txt_Niv'];
$Tipo=$_POST['selectTipo'];

mysqli_query($con,"UPDATE Rutina SET Nombre='$Nombre',Rutina='$Rutina',Nivel='$Nivel',Area='$Tipo' Where Nombre='$ViejoNom'");

mysqli_close($con);

		echo "<script>  
		alert('Rutina Actualizada'); 
		window.location='interfazEntrenador.html';
		</script>";

?>