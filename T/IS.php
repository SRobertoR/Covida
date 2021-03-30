<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-size: 24px;
}
body {
	background-image: url(images/1.jpg);
}
</style>
</head>

<body>
<h1 align="center"><img src="images/logo.jpg" alt="1" width="114" height="108" align="left" /> SpeedFull</h1>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">
  <label for="textfield"></label>
</p>


<section id="seccion">
    <?php
      require_once('usuaio.php');
      require_once('conexion.php');
      
      $conexion = new Conexion();
      $conexion -> conectarBD();
      $emp = new Administrador();
      $emp -> verificarAdmin();
      $conexion -> cerrarBD();
    ?>
  </section>
<p align="center">&nbsp;</p>
</body>
</html>
