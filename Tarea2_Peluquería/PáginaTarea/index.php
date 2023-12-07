
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluquería Rizos Dorados</title>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.style.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__tras">
                    <div class="caja__tras-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__tras-registro">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-registro">
                    <!--Login-->
                    <form action="php/login.usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electrónico" name="Correo">
                        <input type="password" placeholder="Contraseña" name="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Registro-->
                    <form action="php/registro.usuario.php" method="POST" class="formulario__registro">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="Nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="Correo">
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <input type="password" placeholder="Contraseña" name="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
</body>
</html>

        
    </body>
    </html>