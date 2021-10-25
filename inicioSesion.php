<?php
session_start();
require ('resources\controllers\conexionBD.php');


    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="resources\css\index.css">
    <!--<link rel="stylesheet" href="resources\css\inicioSesion.css">-->
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
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Explorar</a></li>
                <li><a href="#">Notificaciones</a></li>
                <li><a href="#">Mensajes</a></li>
                <li><a href="#">Guardados</a></li>
                <?php
                if(!isset($_GET['registro'])){
                    ?>
                
                <li class="listaRegistro"><a href="inicioSesion.php?registro=1">Regístrate</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        
    </nav>
    <div class="contenedorPrincipal">
        <img src="Twitter-Feature.jpg" alt="fotoTwitter" class="fondo">
        <div class="panelInicioSesion">
            <span class="tituloEntrada">Lo que está pasando ahora.</span>
            <?php
                if(isset($_GET['log'])){

                

            ?>
            <h1 class="tituloInicioSesion">Inicia Sesión</h1>
            <form  class="formulario" method="POST" action="http://localhost/proyectoRSS/resources/controllers/gestionFormularios.php">
                <input type="text" hidden name="tipo" value="login">
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
                    <button type="submit" class="botonEnviar">Acceder</button>
                </div>
            </form>
            <h1 class="tituloInicioSesion">ERROR</h1>

            <?php
                }
                else {
                    if(isset($_GET['registro'])){

                    ?>

                    <h1 class="tituloInicioSesion">Registrate con nosotros</h1>
                    <form  class="formulario" method="POST" action="http://localhost/proyectoRSS/resources/controllers/gestionFormularios.php">
                        <input type="text" hidden name="tipo" value="registro">
                        <div class="divEmail">
                            <input type="text" name="email" autocomplete="off" required>  
                            <label for="email" class="cajaEmail">
                                <span class="contenidoEmail">Email</span>
                            </label>
                        </div>
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
                        <div class="divFechaNacimiento">
                            <label for="dia" class="cajaDia"></label>
                            <input type="text" name="dia" autocomplete="off" placeholder="Día" required>                        
                            <label for="mes" class="cajaMes"></label>
                            <input type="text" name="mes" autocomplete="off" placeholder="Mes" required>                        
                            <label for="anyo" class="cajaAnyo"></label>
                            <select type="text" name="anyo" autocomplete="off" required>
                                <?php
                                    $anyo=1840;
                                    while($anyo<=date("Y")){ //Buble con while

                                ?>
                                        <option value="<?php echo("$anyo")?>"><?php echo("$anyo")?></option>
                                <?php
                                    $anyo++;
                                    }
                                    $anyo=1840;
                                ?>
                            </select>                        
                        </div>
                        <div class="divBoton">
                            <button type="submit" class="botonEnviar" >Regístrate</button>
                        </div>
                        
                    </form>
                    <?php
                    }
                    elseif (!isset($_SESSION['nombreLog'])){
                        echo "mal";
                ?>
                
                    <h1 class="tituloInicioSesion">Inicia Sesión</h1>
                    <form  class="formulario" method="POST" action="http://localhost/proyectoRSS/resources/controllers/gestionFormularios.php">
                        <input type="text" hidden name="tipo" value="login">
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
                        <button type="submit" class="botonEnviar">Acceder</button>
                        </div>
                        
                    </form>
                    
            <?php
                }

                else{

                    header('Location: index.php');

                }

               }
            ?>

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