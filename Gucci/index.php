<?php
$alert=""; 
session_start();
if(!empty($_SESSION['active'])){
    header('location:index.php');
}else{

    if (!empty($_POST)) {

        if (empty($_POST['txtUser']) || empty($_POST['txtPassword'])) {

        }else{
            require_once ("Conexion/conexion.php");
            $user=$_POST['txtUser'];
            $clave=$_POST['txtPassword'];
            $consulta=mysqli_query($con,"SELECT * FROM usuario WHERE correo='$user' AND contra='$clave'");
            $resultado=mysqli_num_rows($consulta);

            if ($resultado>0) {
                $data=mysqli_fetch_array($consulta);
                $_SESSION['active']=true;

                $_SESSION['id'] =$data['id_usuario'];
                $_SESSION['nomb']=$data['nombre'];
                $_SESSION['ape']=$data['apellido'];
                $_SESSION['dni']=$data['dni'];
                $_SESSION['tel']=$data['telefono'];
                $_SESSION['usu']=$data['correo'];
                $_SESSION['cla']=$data['contra'];

                header('location:Admin/');
            }else{
                $alert="El usuario y/o la calve son incorrectos";
                session_destroy();
            }
        }
    } 

} 

?>
<!DOCTYPE html>
<html lang = "es">
<html>
<head>
    <meta charset = "UTF-8">
    <title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/login.css">
    <link rel = "icon" href = "Assets/imagenes/logo.png" type = "image/x-icon">
</head>
<body>
    <header>
    </header>
    <div class="container">
        <div class="container__form">
            <img src="Assets/imagenes/login_tr1.png">
            <h2>Iniciar sesion</h2>
            <label style="color: white"><?php echo isset($alert)? $alert:''; ?></label>
            <form action = "index.php" method="post">
            <label for="name">Correo:</label>
            <input type="text" name="txtUser" class="login" placeholder="Ingrese su correo">
            <label for = "name" >Password:</label>
            <input type="password" name="txtPassword" class="login" placeholder="Ingrese su clave">
            <input type="submit" class="btn btn-danger" value="Ingresar" id="boton_ingresar">   
            </form>
        </div>
    </div>
</body>
</html>