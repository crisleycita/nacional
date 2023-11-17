<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['apellido']) >=1 &&
        strlen($_POST['CI']) >=1 &&
        strlen($_POST['email']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['profesion']) >=1 &&
        strlen($_POST['especialidad']) >=1 &&
        strlen($_POST['direccion']) >=1 &&
        strlen($_POST['password']) >=1 
        ) {
             $name = trim($_POST['name']);
             $apellido = trim($_POST['apellido']);
             $CI = trim($_POST['CI']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $profesion = trim($_POST['profesion']);
            $especialidad = trim($_POST['especialidad']);
            $direccion = trim($_POST['direccion']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO usuario(nombre, apellido, CI, email, telefono, profesion, especialidad, direccion, contraseña, fecha)
                VALUES('$name', '$apellido', '$CI', '$email', '$phone', '$profesion', '$especialidad', '$direccion', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
             ?>
                <h3 class="success" >Tu Registro se a completado</h3>
             <?php
            } else {
            ?>
                <h3 class="error">ocurrio un error</h3>
             <?php
            }
        } else {
            ?>
                <h3 class="error">llena todos los campos</h3>
            <?php  
        }
    }
?>

<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['apellido']) >=1 &&
        strlen($_POST['CI']) >=1 &&
        strlen($_POST['email']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['profesion']) >=1 &&
        strlen($_POST['especialidad']) >=1 &&
        strlen($_POST['direccion']) >=1 &&
        strlen($_POST['password']) >=1 
        ) {
             $name = trim($_POST['name']);
             $apellido = trim($_POST['apellido']);
             $CI = trim($_POST['CI']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $profesion = trim($_POST['profesion']);
            $especialidad = trim($_POST['especialidad']);
            $direccion = trim($_POST['direccion']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO docentes(nombre, apellido, CI, email, telefono, profesion, especialidad, direccion, contraseña, fecha)
                VALUES('$name', '$apellido', '$CI', '$email', '$phone', '$profesion', '$especialidad', '$direccion', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
             ?>
                <h3 class="success" >Tu Registro se a completado</h3>
             <?php
            } else {
            ?>
                <h3 class="error">ocurrio un error</h3>
             <?php
            }
        } else {
            ?>
                <h3 class="error">llena todos los campos</h3>
            <?php  
        }
    }
?>

<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['Ap_Paterno']) >=1 &&
        strlen($_POST['Ap_Materno']) >=1 &&
        strlen($_POST['Curso']) >=1 &&
        strlen($_POST['ci']) >=1 &&
        strlen($_POST['EMAIL']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['direccion']) >=1 &&
        strlen($_POST['password']) >=1 
        ) {
             $name = trim($_POST['name']);
             $Ap_Paterno = trim($_POST['Ap_Paterno']);
             $Ap_Materno = trim($_POST['Ap_Materno']);
            $Curso = trim($_POST['Curso']);
            $ci = trim($_POST['ci']);
            $EMAIL = trim($_POST['EMAIL']);
            $phone = trim($_POST['phone']);
            $direccion = trim($_POST['direccion']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO alumnos(nombre, Ap_Paterno, Ap_Materno, Curso, ci, EMAIL, phone, direccion, contraseña, fecha)
                VALUES('$name', '$Ap_Paterno', '$Ap_Materno', '$Curso', '$ci', '$EMAIL', '$phone', '$direccion', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
             ?>
                <h3 class="success" >Tu Registro se a completado</h3>
             <?php
            } else {
            ?>
                <h3 class="error">ocurrio un error</h3>
             <?php
            }
        } else {
            ?>
                <h3 class="error">llena todos los campos</h3>
            <?php  
        }
    }
?>