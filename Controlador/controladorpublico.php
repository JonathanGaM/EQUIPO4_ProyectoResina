<?php

include_once 'Modelo/clsclientes.php';
include_once 'Modelo/clscategoria.php';
include_once 'Modelo/clsproductos.php';

class controladorpublico
{
    private $vista;
    public function Consultacatalogo(){
        $catalogos=new clscategoria();
        $Consulta =$catalogos->ConsultaCategoria();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Publica/frmcatalogopublico.php");


    }
        
    public function consultafundas(){

        $catalogos=new clscategoria();
        $titulo = $_GET['titulo'];
        $Consulta =$catalogos->fundas($titulo);
        include_once("Vista/Inicio/catalogo/frmproductos.php");


    }
    public function consultafundasP(){

        $catalogos=new clscategoria();
        $titulo = $_GET['titulo'];
        $Consulta =$catalogos->fundas($titulo);
        include_once("Vista/Inicio/catalogo/frmproductosP.php");


    }
    public function detallesProd(){
        $detalle = new clsproductos();
    $nomprod = $_GET['nomprod'];
    $Consulta = $detalle->ConsultaDetallesProductos($nomprod);

    if (!$Consulta) {
        echo "Error en la consulta: " . $detalle->getError();
        return;
    }
    $vista = "Vista/Inicio/frmpiedepagina.php";
    include_once("Vista/Inicio/catalogo/frmDetalleProd.php");
}
public function detallesProdP(){
    $detalle = new clsproductos();
$nomprod = $_GET['nomprod'];
$Consulta = $detalle->ConsultaDetallesProductos($nomprod);

if (!$Consulta) {
    echo "Error en la consulta: " . $detalle->getError();
    return;
}
$vista = "Vista/Inicio/frmpiedepagina.php";
include_once("Vista/Inicio/catalogo/frmDetalleProdP.php");
}
    public function salir(){
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Publica/frmplantillapublica.php");
    }   
    

}
?>