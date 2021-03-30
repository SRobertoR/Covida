<?php
include('conexion.php');
class Administrador{
  private $_id;
  private $_nomusuario;
  private $_contrasena;

  public function iniciaradministrador($id, $nomusuario,$contrasena) 
  {
    this.$_id = $id;
    this.$_nomusuario = $nomusuario;
    this.$_contrasena = $contrasena;
  }

  public function verificarAdmin()
  {
    $conecta = new Conexion();
    $nomusuario = $this->getNomusuario();
    $contrasena = $this->getContrasena();

    $registro = mysqli_query($conecta->conectarBD(),"SELECT * FROM registrados where Correo= '$nomusuario' AND Contraseña = '$contrasena'")or die ("No existe el registro".mysqli_error($this->conectarBD()));

    if($reg = mysqli_fetch_array($registro)){
      header("Location: index.html");
    }else{
      echo "<script language='JavaScript'> alert('Usuario o contraseña incorrecto')</script> ";
    }
  }

public function getNomusuario(){
    return $_REQUEST['textUser'];
  }
  
  public function getContrasena(){
    return $_REQUEST['textcon'];
  }

}