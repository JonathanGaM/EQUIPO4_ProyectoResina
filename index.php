<?php

$verificaclase=!empty($_GET['clase']);
$verificametodo=!empty($_GET['metodo']);

if($verificaclase && $verificametodo){
    $clase = $_GET['clase'];
    $metodo = $_GET['metodo'];
    $rutaArchivo = "Controlador/".$clase.".php";
    require_once $rutaArchivo;
    
    $objeto = new $clase; 
    $objeto->$metodo();
}
else
{
    
	require_once("Controlador/controladorprincipal.php");
    $iniciar=new controladorprincipal();
    $iniciar->inicio();
}

?>