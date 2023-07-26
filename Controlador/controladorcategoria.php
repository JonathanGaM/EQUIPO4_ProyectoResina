<?php
include_once 'Modelo/clscategoria.php';

class controladorcategoria
{
    public function salir()
	{	
        include_once("Vista/Publica/frmplantillapublica.php");
    }
    public function Fundas()
	{	
        include_once("Vista/Publica/frmfundas.php");
    }
    public function Llaveros()
	{	
        include_once("Vista/Publica/frmllaveros.php");
    }
    public function Jolleria()
	{	
        include_once("Vista/Publica/frmjolleria.php");
    }
    public function Marcos()
	{	
        include_once("Vista/Publica//frmmarcos.php");
    }

}

?>