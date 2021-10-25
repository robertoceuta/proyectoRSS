<?php 

$host='localhost';
$usuarioDB='root';
$contrasenaDB='';
$baseDeDatos='falsotwitter';

/*function db_connect(&$bd, $host, $usuarioDB, $contrasenaDB, $baseDeDatos){
    $bd= new mysqli($host,$usuarioDB,$contrasenaDB,$baseDeDatos);
    $bd ->set_charset("utf8");
}

db_connect();*/

$bd=mysqli_connect($host,$usuarioDB,$contrasenaDB,$baseDeDatos);
//bd= new mysqli($host,$usuarioDB,$contrasenaDB,$baseDeDatos); //creamos el objeto base de datos introduciento todos los valores.
//$bd->set_charset("utf8"); 

/*if(isset($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];
    $consulta="select email, pass from usuarios where email = '$usuario'";

    $resultadoConsulta= mysqli_query($bd, $consulta);
    $resultadoConsulta = $bd -> query($consulta);
   // var_dump($resultadoConsulta);
    //$resultadoConsulta->free();
    $bd->close();

    $filaConsulta=mysqli_fetch_assoc($resultadoConsulta);

    //$filaConsulta=resultadoConsulta->fetch_array();
    if($pass == $filaConsulta['pass']){
        session_start();
        $_SESSION['nombreLog']=$usuario;
        $_SESSION['passLog']=$pass;
       // echo ("<p>log ok</p>");
        header('Location:http://localhost/proyectoRSS/inicioSesion.php');
    }
}
    else{
        header('Location:http://localhost/proyectoRSS/inicioSesion.php?log=error');
    }*/
?>

