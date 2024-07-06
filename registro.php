<?php

    include 'conexion.php';

    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $clave = $_POST ['clave'];

    $query = "INSERT INTO form1(nombre, email, clave) 
        VALUES('$nombre', '$email', '$clave')";
    
        //Verificar que el email no se repita en la base de datos 
        
        $verificar_email = mysqli_query($conexion, "SELECT * FROM form1 WHERE email = '$email' ");

        if(mysqli_num_rows($verificar_email) > 0){
            echo '
            <script>
            alert("Este correo ya esta registrado, intenta con otro diferente"); 
            window.location = "../animalhome3/login.php";           
            </script>
            ';
            exit();
        }
        

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script> 
            alert("Usuario almacenado exitosamente");
            window.location = "../animalhome3/index.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../animalhome3/login.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>