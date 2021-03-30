<?php
require_once('Connections/Speed.php');

$Busca_Rutina=$_POST['txt_busca_Rutina'];

$Resultado=mysqli_query($con,"SELECT * FROM Rutina WHERE Nombre='$Busca_Rutina'");

if($Res=mysqli_fetch_array($Resultado)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rutina</title>
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
<form action="UpdateRutina.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">Rutina</h1>
	<h3 align="center">Ingrese sus datos:</h3> 
    
    <div align="center">
    Ingrese el nombre:<br>  
    <input type="text" name="txtNom" required="required"/>
    <input required type="hidden" name="Viejo_nombre" value="<?php echo $Res['Nombre']?>" />
    <p align="center">&nbsp;</p>
   </div>
   
   <div align="center">
    Ingrese la rutina:<br>
    <p>
    	<textarea name="txtRutina" rows="10" cols="50">
        <?php
		echo $Res['Rutina'];
		?>
        </textarea>
    </p>
    <p align="center">&nbsp;</p>
   </div>
   
   <div align="center">
    Ingrese el nivel:<br>  
    <select name="txt_Niv" id="selectEd" required="required">  
			<option value="Principiante">Principiante</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
    </select>
    <p align="center">&nbsp;</p>
   </div>
      <div align="center">
   	Ingrese el area:<br>
    <select name="selectTipo" id="selectTipo" required="required">
            <option value="Pierna y Muslo">Pierna y Muslo</option>
            <option value="Brazo y Pecho">Brazo y Pecho</option>
            <option value="Espalda y hombros">Espalda y Hombros</option>
            <option value="Abdomen">Abdomenabdomen</option>
            </select>
            <p align="center">&nbsp;</p>
	</div>
    
    <div align="center">
  		<a href="interfazEntrenador.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Actualizar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>

<?php	
}else{
?>

<?php
}
?>