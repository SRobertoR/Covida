<?php
$mat=$_POST['textMat'];
$nom=$_POST['textNom'];
$app=$_POST['textAp'];
$edad=$_POST['selectEd'];
$estatura=$_POST['textEst'];
$peso=$_POST['textPes'];
$dir=$_POST['textDir'];
$tel=$_POST['textTel'];
$correo=$_POST['textCor'];
$contra=$_POST['textCon'];

$con=mysqli_connect("localhost","root","12345678","speed");
mysqli_query($con,"insert into cliente(cusu,nomusu,apamusu,edadusu,dirusu,telusu,correousu,contraseñausu,pesousu,estaturausu) values('$mat','$nom','$app','$edad','$dir','$tel','$correo','$contra','$peso','$estatura')") or die("Error en la insercion".mysqli_error($con));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<style type="text/css">
body {
	background-image: url(images/1.jpg);
	background-color: #000;
}
body,td,th {
	color: #FFF;
	font-size: larger;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h1 align="center">
    <label for="textfield"></label>
  SpeedFull 
</h1>
</form>
<h2 align="center">&quot;Felicidades Ya Estas Registrado&quot;</h2>
<form id="form2" name="form2" method="post" action="FR.php">
    <div align="center">
      <table width="486" border="1">
      <th scope="row">Matricula</th>
          <td><label for="textCor"></label>
            <input name="textMat" type="text" id="textfield5" size="50" maxlength="50" value="<?php echo $mat?>"/></td>
        <tr>
          <th width="167" scope="row">Nombre</th>
          <td width="303"><label for="textTel"></label>
            <input name="textNom" type="text" id="textfield4" size="50" maxlength="50" value="<?php echo $nom?>"/></td>
        </tr>
        <tr>
          <th scope="row">Apellidos</th>
          <td><label for="textCor"></label>
            <input name="textAp" type="text" id="textfield5" size="50" maxlength="50" value="<?php echo $app?>"/></td>
        </tr>
        <tr>
          <th scope="row">Edad</th>
          <td><label for="textfield2"></label>
          <input type="text" name="textfield2" id="textfield2" size="50" maxlength="50" value="<?php echo $edad?>"/></td>
        </tr>
        <tr>
          <th scope="row">Estatura</th>
          <td><input name="textEst" type="text" id="textEst" size="50" maxlength="50" value="<?php echo $estatura?>"/></td>
        </tr>
        <tr>
          <th scope="row">Peso</th>
          <td><input name="textPes" type="text" id="textPes" size="50" maxlength="50" value="<?php echo $peso?>"/></td>
        </tr>
        <tr>
          <th scope="row">Direccion</th>
          <td><input name="textDir" type="text" id="textfield" size="50" maxlength="50" value="<?php echo $dir?>"/></td>
        </tr>
        <tr>
          <th scope="row">Telefono</th>
          <td><input name="textTel" type="text" id="textTel" size="50" maxlength="10" value="<?php echo $tel?>"/></td>
        </tr>
        <tr>
          <th scope="row">Correo</th>
          <td><input name="textCor" type="text" id="textCor" size="50" maxlength="50" value="<?php echo $correo?>"/></td>
        </tr>
        <tr>
          <th scope="row">Contraseña</th>
          <td><input name="textCon" type="password" id="textCon" size="50" maxlength="50" value="<?php echo $contra?>"/></td>
        </tr>
        <tr>
          <th height="86" colspan="2" scope="row"><input type="submit" name="buttonR" id="buttonR" value="Actualizar Registro" /></th>
        </tr>
      </table>
  </div>
    <div align="center"></div>
</form>
</body>
</html>
<?php

mysqli_close($con);

?>