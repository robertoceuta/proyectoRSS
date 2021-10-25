<?php
require('C:\xampp\htdocs\proyectoRSS\resources\controllers\conexionBD.php');

if(isset($_POST['tipo'])){
    if($_POST['tipo']=="login"){
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        $consulta="select * from usuarios where usuario =  '$usuario'";
       // echo ("he hecho la consulta");
       // var_dump("$consulta");
    
        $resultadoConsulta= mysqli_query($bd, $consulta);
       // $resultadoConsulta = $bd -> query($consulta);
       // var_dump($resultadoConsulta);
        //$resultadoConsulta->free();
       // $bd->close();
    
        $filaConsulta=mysqli_fetch_assoc($resultadoConsulta);
        //var_dump($resultadoConsulta);
        //var_dump($filaConsulta);
        if($filaConsulta!=NULL){
             //$filaConsulta=resultadoConsulta->fetch_array();
            if($pass == $filaConsulta['pass']){
            session_start();
                $_SESSION['claveLog']=$filaConsulta['clave'];
                $_SESSION['emailLog']=$filaConsulta['email'];
                $_SESSION['passLog']=$filaConsulta['pass'];
                $_SESSION['nombreLog']=$filaConsulta['usuario'];
                $_SESSION['rolLog']=$filaConsulta['rol'];
                $_SESSION['imagenLog']=$filaConsulta['imagen'];

                //var_dump ($_SESSION['nombreLog']);
                //echo ("<p>log ok</p>");
                header('Location:http://localhost/proyectoRSS/index.php');
                //header('Location:http://localhost/proyectoRSS/debug.php');
            }
        }
            else{
                //echo ("<p>error</p>");
                header('Location:http://localhost/proyectoRSS/inicioSesion.php?log=1');
            }
    }
    if($_POST['tipo']=="registro"){
        $usuario=$_POST['usuario'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $consulta="insert into usuarios (usuario, email, pass, fechaRegistro, rol) VALUES ('$usuario', '$email', '$pass', now(), 0)";

        $resultadoConsulta= mysqli_query($bd, $consulta);
        if($resultadoConsulta==false){
            echo("mal");
        }
        else{
            echo ("he llegado al query");
        }
       
        //$consultaComprobar="select usuario, email, pass, rol from usuarios where email =  '$email'";

        //$resultadoConsulta= mysqli_query($bd, $consultaComprobar);

        //$filaConsulta=mysqli_fetch_assoc($resultadoConsulta);

        /*if($filaConsulta!=NULL){
            if($pass == $filaConsulta['pass']){
                session_start();
                    $_SESSION['nombreLog']=$email;
                    $_SESSION['passLog']=$pass;
                    //var_dump ($pass, $filaConsulta);
                    //echo ("<p>log ok</p>");
                    header('Location:http://localhost/proyectoRSS/inicioSesion.php');
                }
            }
                else{
                    //echo ("<p>error</p>");
                    header('Location:http://localhost/proyectoRSS/inicioSesion.php?log=1');
                }*/
        }

    }


 

   
?>