<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NACIONAL GUAYARAMERIN</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<?php
$conexion = mysqli_connect("localhost", "root", "", "registro");
?>
</head>

<body>
<img  src="../images/fondo.jpg" class="m">
<CENTER><H1><FONT FACE="algerian"COLOR="#009900">REGISTRO DE DOCENTES</FONT></H1>
<section class="objet"></section> <Br>

<div class="contenedor">
<div>
<table width="420" border="4" bordercolor="#000" bgcolor="#FFFFFF">
  <tr>
    <td>Codigo</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>CI</td>
    <td>Email</td>
    <td>Telefono</td>
    <td>Profesion</td>
    <td>Especialidad</td>
    <td>Direccion</td>
    <td>Contraseña</td>
    <td>Fecha</td>
  </tr>
  <?php
$sql="select * from docentes";
$result= mysqli_query($conexion, $sql);

while($mostrar=mysqli_fetch_array($result)){
?>
  <tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['apellido']?></td>
    <td><?php echo $mostrar['CI']?></td>
    <td><?php echo $mostrar['email']?></td>
    <td><?php echo $mostrar['telefono']?></td>
    <td><?php echo $mostrar['profesion']?></td>
    <td><?php echo $mostrar['especialidad']?></td>
    <td><?php echo $mostrar['direccion']?></td>
    <td><?php echo $mostrar['contraseña']?></td>
    <td><?php echo $mostrar['fecha']?></td>
  </tr>
  <?php
}
?>
</table>
</div>

<div>
<form method="post">
      <H1><FONT FACE="Arial black"COLOR="#000000">INICIA TU REGISTRO</FONT></H1>
 <FONT FACE="Arial black"COLOR="#000000" size="4">NOMBRE:</FONT>
      <div class="input-wrapper">
        <input type="text" name="name" placeholder="">
        </div>
    <FONT FACE="Arial black"COLOR="#000000" size="4">APELLIDO:</FONT>
      <div class="input-wrapper">
        <input type="text" name="apellido" placeholder="">
        </div>
    <FONT FACE="Arial black"COLOR="#000000" size="4">C.I.:</FONT>
      <div class="input-wrapper">
        <input type="CI" name="CI" placeholder="">
        </div>
    <FONT FACE="Arial black"COLOR="#000000" size="4">EMAIL:</FONT>
      <div class="input-wrapper">
        <input type="email" name="email" placeholder="">
        </div>
   <FONT FACE="Arial black"COLOR="#000000" size="4">CELULAR:</FONT>
      <div class="input-wrapper">
        <input type="tel" name="phone" placeholder="">
        </div>
   <FONT FACE="Arial black"COLOR="#000000" size="4">PROFECION:</FONT>
      <div class="input-wrapper">
        <input type="text" name="profesion" placeholder="">
        </div>
   <FONT FACE="Arial black"COLOR="#000000" size="4">ESPECIALIDAD:</FONT>
      <div class="input-wrapper">
        <input type="text" name="especialidad" placeholder="">
        </div>
   <FONT FACE="Arial black"COLOR="#000000" size="4">DIRECCION:</FONT>
      <div class="input-wrapper">
        <input type="text" name="direccion" placeholder="">
        </div>
   <FONT FACE="Arial black"COLOR="#000000" size="4">CONTRASEÑA:</FONT>
      <div class="input-wrapper">
        <input type="password" name="password" placeholder="">
        </div>
      <input class="btn" type="submit" name="register" value="REGISTRAR" />
  </form>
</div>
</div>
  <?php
include("registrar.php");
?>
</body>
</html>
