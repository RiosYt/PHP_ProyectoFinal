<?php
    require_once 'registrar.php';

    $controlador=new Registros();

    if(!empty($_REQUEST['m']))
    {
        $metodo=$_REQUEST['m'];
        $controlador->$metodo();
    }
?>