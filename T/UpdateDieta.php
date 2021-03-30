<?php
require_once('Connections/Speed.php');

$Nombre=$_POST['txtNom'];
$ViejoNom=$_POST['Viejo_nombre'];
$Dieta=$_POST['txtDieta'];
$Calo=$_POST['Calorias'];

mysqli_query($con,"UPDATE Dieta SET Nombre='$Nombre',Dieta='$Dieta',Calorias='$Calo' Where Nombre='$ViejoNom'");

mysqli_close($con);

		echo "<script>  
		alert('Alimento Actualizado'); 
		window.location='interfazEntrenador.html';
		</script>";
?>