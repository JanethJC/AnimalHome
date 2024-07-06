<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
        <main>

            <div class="contenedor__todo">

                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes cuenta?</h3>
                        <p>Inicia sesion para ingresar a la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                    </div>
                            <div class="caja__trasera-register">
                                <h3>¿Aun no tienes cuenta?</h3>
                                <p>Registrate para iniciar sesion</p>
                                <button id="btn__registrarse">Registrarse</button>
                            </div>
            </div>
            <!--Formulario de login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login.usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Clave" name=clave>
                    <button>Entrar</button>
            </form>
            <!--Registro-->
            <form action="registro.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Clave" name="clave">
                <button>Registrarse</button>
            </form>
            </div>
            </div>
        </main>
        <script src= "scriptlogin.js"></script>
</body>
</html>