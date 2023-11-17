<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NACIONAL GUAYARAMERIN</title>
</head>
<link href="css/main.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="css/estilos.css">
 <script>
function iniciar(){
edad=document.getElementById("miedad");
edad.addEventListener("change", cambiarrango, false);
document.informacion.addEventListener("invalid",
validacion, true);
document.getElementById("enviar").addEventListener("click",
enviar, false);
document.informacion.addEventListener("input", controlar,
false);
}
function cambiarrango(){
var salida=document.getElementById("rango");
var calc=edad.value-10;
if(calc<10){
calc=0;
edad.value=10;
}
salida.innerHTML=calc+' a '+edad.value;
}
function validacion(e){
var elemento=e.target;
elemento.style.background='#FFDDDD';
}
function enviar(){
var elemento=document.getElementById("usuario");
var valido=document.informacion.checkValidity();
if(valido){
document.informacion.submit();
}else if(elemento.validity.patternMismatch ||
elemento.validity.valueMissing){
alert('el nombre de usuario debe tener mínimo de 3 caracteres');
}
}
function controlar(e){
var elemento=e.target;
if(elemento.validity.valid){
elemento.style.background='#FFFFFF';
}else{
elemento.style.background='#FFDDDD';
}
}
window.addEventListener("load", iniciar, false);
</script>
<body>
<img  src="images/fondo.jpg" class="m">
<CENTER><H1><FONT FACE="algerian"COLOR="#009900">BIENVENIDO A LA PAGINA LICEO NACIONAL GUAYARAMERIN</FONT></H1>
<section class="objet"></section>
<BR>
<section>
  <form name="informacion" method="get">
<FONT color="#00FF00">USUARIO:
<input pattern="[A-Za-z]{3,}" name="usuario" id="usuario"
maxlength="30" required><BR /><BR />
EMAIL:
<input type="CONTRASEÑA" name="CONTRASEÑA" id="CONTRASEÑA" required><BR /><BR />
RANGO DE EDAD:</FONT>
<input type="range" name="miedad" id="miedad" min="0"
max="100" step="10" value="10">
<output id="rango">0 a 10</output><BR /><BR />
<input type="button" id="enviar" value="ENVIAR">
  </form>
</section>
<table width="59" border="0">
  <tr>
    <td><form id="form1" name="form1" method="post" action="index.html">
      <input type="submit" name="INGRESAR" id="INGRESAR" value="INGRESAR" />
    </form></td>
  </tr>
</table>
<style type="text/css">

</body>
</html>
