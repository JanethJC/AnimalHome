<?php
        session_start();

    include 'conexion.php';

    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM form1 WHERE email='$email' and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['nombre'] = $email;
        header("location: ../animalhome3/index.2.php");
        exit;
    }else{
        echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../animalhome3/login.php";
        </script>
        ';
        exit;
    }
?>