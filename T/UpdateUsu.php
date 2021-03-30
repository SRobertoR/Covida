<?php
require_once('Connections/Speed.php');
$Nombre=$_POST['Nombre'];
$ViejoNom=$_POST['Viejo_nombre'];
$Edad=$_POST['selectEd'];
$Peso=$_POST['txt_Peso'];
$Estatura=$_POST['txt_Estatura'];
$Contra=$_POST['txt_Contraseña'];

mysqli_query($con,"UPDATE Usuario SET Nombre='$Nombre',Edad='$Edad',Peso='$Peso',Estatura='$Estatura',Contra='$Contra' Where Nombre='$ViejoNom'");

mysqli_close($con);

		echo "<script>  
		alert('Datos Actualizados'); 
		window.location='interfazUsuario.html';
		</script>";
?>