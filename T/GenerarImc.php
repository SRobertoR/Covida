<?php
require_once('Connections/Speed.php'); 

		$ValiContra=$_POST['Contra'];
	
	$Resul=mysqli_query($con,"SELECT * FROM Usuario WHERE Contra='$ValiContra'");	
	
	if($Resu=mysqli_fetch_array($Resul)){	

	$Sex= $Resu["Sexo"];
	$Pes= $Resu["Peso"];
	$Nom= $Resu["Nombre"];
	$Esta= $Resu["Estatura"] /100;
		
		$Altu=$Esta*$Esta;
		$IMC=$Pes/$Altu;

		if($IMC < 18){
			$TipoPeso="Peso Bajo";
		}else if($IMC >= 18 || $IMC<=24 ){
			$TipoPeso="Peso Normal";
		}else if($IMC >= 25 || $IMC<=26 ){
			$TipoPeso="Sobre Peso";
		}else if($IMC == 27){
			$TipoPeso="Obesidad";
		}else if($IMC >= 28 || $IMC<=30 ){
			$TipoPeso="Obesidad Grado I";
		}else if($IMC >= 31 || $IMC<=40 ){
			$TipoPeso="Obesidad Grado II";
		}else if($IMC > 40 ){
			$TipoPeso="Obesidad Grado III";
		}
	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generar Rutina</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-size: 18px;
}
body {
	background-image: url(images/galeria12.jpg);
}
.botones {
	color: #0F3;
}
</style>
</head>
<body>
<form> 
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
	<h1 align="center">TUS DATOS</h1> 
    
    <div align="center">
    <h1>Hola <?php echo $Nom ?></h1><br>
    <p align="center">&nbsp;</p>
    </div>
    
    <div align="center">
    Tu IMC es:<br>  
	<?php echo $IMC?>
    <p align="center">&nbsp;</p>
    </div>
    
    <div align="center">
    Tu tipo de peso es:<br>  
	<?php echo $TipoPeso?>
    <p align="center">&nbsp;</p>
    </div>
    
    <div align="center">
  		<a href="interfazUsuario.html">Atras</a>
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>		
<?php					
	}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generar IMC</title>
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
<form action="GenerarImc.php" method="post"> 
	
    <font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
    
	<h1 align="center">GENERAR IMC</h1>
	<h3 align="center">Para mayor Seguridad nuevamente ingrese su contraseña:</h3> 
    
    <div align="center">
   	¡Intenta de nuevo! <br>
    <input type="password" name="Contra" pattern="[A-Za-z0-9]{8,20}" title="Un código de seguridad válido consiste en una 		cadena con 8 a 20 caracteres, cada uno de los cuales es una letra o un dígito" required>
	<p align="center">&nbsp;</p>
    </div>
   
    <div align="center">
  		<a href="interfazUsuario.html">Atras</a>
   		<input type="submit" name="button" id="button" value="Generar" />
        <p align="center">&nbsp;</p>
	</div>
</form>
</body>
</html>

<?php
}
?>