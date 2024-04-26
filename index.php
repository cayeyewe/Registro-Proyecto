<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECYMAX - Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOqbT1Wj8LyTjo7mOUStjsKC4pOpQbqyi7RrhNudi+9RwhKKMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .login-containerregister {
            display: none;
        }
        .login-form h2 {
            color: rgb(255, 255, 255);
            font-size: 36px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<section id="pantalla-dividida">
    <div class="izquierda">
        <div class="container">
            <div class="login-container">
                <div class="login-form">
                    <h2>¡BIENVENIDO!<p><h3>Regístrate en nuestra página <button id="btn__registrarse">Registrarse</button></p></h2>
                    <form action="registro_usuarios_be.php" method="POST">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="usuario">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="contrasena">
                        <input type="submit" class="submit" value="INICIAR SESIÓN">
                    </form>
                </div>
                <div class="Login"></div>
            </div>
        </div>
        <div class="container">
            <div class="login-containerregister">
                <h3>REGÍSTRATE</h3>
                <form action="registro_usuarios_be.php" method="POST">
                    <input type="text" placeholder="Nombres" class="Nombres" name="nombre_completo">
                    <input type="text" placeholder="Apellidos" class="apellidos" name="apellidos">
                    <input type="email" placeholder="Correo electrónico" class="campo-correo" name="correo">
                    <input type="tel" placeholder="Número de teléfono" class="campo-telefono" name="numero">
                    <input type="password" placeholder="Contraseña" class="pass" name="contrasena">
                    <input type="text" placeholder="Hogar/Empresa" class="hogar-Empresa" name="hogar_empresa">
                    <input type="submit" class="submit" value="REGISTRARSE" name="register">
                </form>
            </div>
            <div class="Login"></div>
        </div>
    </div>
    <div class="derecha"></div>
</section>
<script>
    document.getElementById('btn__registrarse').addEventListener('click', function () {
        document.querySelector('.login-container').style.display = 'none';
        document.querySelector('.login-containerregister').style.display = 'block';
    });
</script>
</body>
</html>
