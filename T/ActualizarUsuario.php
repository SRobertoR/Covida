<?php
require_once('Connections/Speed.php');

$Busca=$_POST['txt_Contraseña'];

$Resultado=mysqli_query($con,"SELECT * FROM Usuario WHERE Contra='$Busca'");

if($Res=mysqli_fetch_array($Resultado)){
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

<font face="Arial" size="15" color="#FFFFFF">
<h1 align="center"><i>SpeedFull</i></h1>
</font>

<form id="form1" name="Registro" method="post" action="UpdateUsu.php" target="_blank">

<h1 align="center">Actualiza Datos</h1>
<h3 align="center">Ingrese sus datos:</h3>

<div align="center">
   	Editar Nombre <br>
    <input type="text" name="Nombre" required="required" value="<?php echo $Res['Nombre']?>"/>
    <input required type="hidden" name="Viejo_nombre" value="<?php echo $Res['Nombre'] ?>" />
</div>

<div align="center">
   	Actualizar Edad<br> 
    <select name="selectEd" id="selectEd">
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            <option value="60">60</option>
            <option value="61">61</option>
            <option value="62">62</option>
            <option value="63">63</option>
            <option value="64">64</option>
            <option value="65">65</option>
            <option value="66">66</option>
            <option value="67">67</option>
            <option value="68">68</option>
            <option value="69">69</option>
            <option value="70">70</option>
            <option value="71">71</option>
            <option value="72">72</option>
            <option value="73">73</option>
            <option value="74">74</option>
            <option value="75">75</option>
            <option value="76">76</option>
            <option value="77">77</option>
            <option value="78">78</option>
            <option value="79">79</option>
            <option value="80">80</option>
            <option value="81">81</option>
            <option value="82">82</option>
            <option value="83">83</option>
            <option value="84">84</option>
            <option value="85">85</option>
            <option value="86">86</option>
            <option value="87">87</option>
            <option value="88">88</option>
            <option value="89">89</option>
            <option value="90">90</option>
            <option value="91">91</option>
            <option value="92">92</option>
            <option value="93">93</option>
            <option value="94">94</option>
            <option value="95">95</option>
            <option value="96">96</option>
            <option value="97">97</option>
            <option value="98">98</option>
            <option value="99">99</option>
            </select>
</div>
<div align="center">
   	Actualizar Peso <br>
    <input required="required" type="number" placeholder="Kg." name="txt_Peso" value="<?php echo $Res['Peso'] ?>"/><br>
</div>
<div align="center">
   	Actualizar Estatura <br>
    <input required="required" type="number"  placeholder="cm."name="txt_Estatura" value="<?php echo $Res['Estatura'] ?>"/><br>
</div>
<div align="center">
   	Actualizar Contraseña <br>
    <input type="password"  value="<?php echo $Res['Contra'] ?>"name="txt_Contraseña" pattern="[A-Za-z0-9]{8,20}" title="Un código de seguridad válido consiste en una cadena con 8 a 20 caracteres, cada uno de los cuales es una letra o un dígito" required>
</div>

<div align="center" class="botones">
  	<a href="interfazUsuario.html">Atras</a>
   	<input type="submit" name="button" id="button" value="Actualizar" /><br>
</div>
<p align="center">&nbsp;</p>
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
<title>Documento sin título</title>
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
	<font face="Arial" color="#FFFFFF" size="6">
	<h1 align="center"><i>SpeedFull</i></h1>
	</font>
<form action="ActualizarUsuario.php" method="post">

	<h1 align="center">ACTUALIZAR DATOS</h1>  
    <h3 align="center">¡Intenta de nuevo!</h3>    
    <div align="center">
   	Contraseña invalida <br>
    <input type="password" name="txt_Contraseña" pattern="[A-Za-z0-9]{8,20}" title="Un código de seguridad válido consiste en una 		cadena con 8 a 20 caracteres, cada uno de los cuales es una letra o un dígito" required>
	</div>
    
    <div class="botones" align="center">
   	  <a href="interfazUsuario.html">Atras</a>
	  <input type="submit" name="button2" id="button2" value="Validar" />
    </div>
</form>
</body>
</html>

<?php
}
?>

