<?php
if(isset($_REQUEST['enviar'])){
    $nombreForm=$_POST['nombre'];
    $edadForm=$_POST['edad'];
    if($_POST['vivo']=="Si"){
        $vivoForm=true;
    }
    else if($_POST['vivo']=="No"){
        $vivoForm=false;
    }
    else{
        $vivoForm="a saber...";
    }
    
      
}
$nombre=(string)"Roberto Carlos";
$edad=(int)30;
$estaVivo=(boolean)true; 
var_dump($nombre);
?>
<p>
    <?php echo ("El tipo más guapo de la clase se llama $nombre, tiene $edad años y "); 
    if($estaVivo == true){
        echo ("está vivo.");
    }
    else{
        echo ("está muerto.");
    }
    ?>
</p>
<?php
echo("<p> El tipo más guapo de la clase se llama $nombre, tiene $edad años y ");
if($estaVivo == true){
    echo ('está vivo.');
}
else{
    echo ('está muerto.');
}
?>

<form method="POST" action="">
    <label for="nombre">
    <input type="text" name="nombre"/>
    <label for="edad">
    <input type="text" name="edad"/>
    <label for="vivo">
    <select name="vivo">
        <option>Selecciona</option>
        <option>Sí</option>
        <option>No</option>
    </select>
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php
if(isset($_POST['nombre'])){
    echo("<p> La persona no tan guapa de la clase se llama $nombreForm, tiene $edadForm años y ");
if($vivoForm == true){
    echo ("está vivo.");
}
else{
    echo ("está muerto.");
}
}
?>

