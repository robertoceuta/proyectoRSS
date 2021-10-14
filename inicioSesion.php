<?php   
    if(isset($_POST['login'])){
        $usuario=$_REQUEST['usuario'];
        $pass=$_REQUEST['pass'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="inicioSesion.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <nav class="barraNav">
        <div class="tituloNav">
            <p class="contenidoTituloNav">Falso Twitter</p>
        </div>
        <div class="listaNav">
            <ul id="lista">
                
            </ul>
        </div>
        
    </nav>
    <div class="contenedorPrincipal">
        <img src="Twitter-Feature.jpg" alt="fotoTwitter" class="fondo">
        <div class="panelInicioSesion">
            <span class="tituloEntrada">Lo que está pasando ahora.</span>
            <h1 class="tituloInicioSesion">Inicia Sesión</h1>
            <form action="post" class="formulario">
                <div class="divUsuario">
                    <input type="text" name="usuario" autocomplete="off" required>  
                    <label for="usuario" class="cajaUsuario">
                        <span class="contenidoUsuario">Usuario</span>
                    </label>
                </div>
                <div class="divPass">
                    <input type="password" name="pass" autocomplete="off" required>  
                    <label for="pass" class="cajaPass">
                        <span class="contenidoPass">Contraseña</span>
                    </label>
                </div>
                <div class="divBoton">
                    <input type="submit" class="botonEnviar" name="login"></input>
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
<footer class="pie">
    <div class="pieDePagina">
        <p><a href="#">Acerca de</a></p>
        <p><a href="#">Centro de ayuda</a></p>
        <p><a href="#">Condiciones de Servicio</a></p>
        <p><a href="#">Política de Privacidad</a></p>
        <p><a href="#">Política de cookies</a></p>
        <p><a href="#">Información de anuncios</a></p>
        <p><a href="#">Marketing</a></p>
        <p><a href="#">Twitter para empresas</a></p>
        <p><a href="#">© 2021 RobertoSexy, Inc.</a></p>
    </div>
</footer>
</html>