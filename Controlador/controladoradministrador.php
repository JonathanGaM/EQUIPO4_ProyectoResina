<?php
include_once 'Modelo/clsadministrador.php';
include_once 'Modelo/clscolores.php';
include_once 'Modelo/clsproductos.php';
include_once 'Modelo/clscategoria.php';

class controladoradministrador
{
    private $vista;
    public function salir()
	{	
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmplantillaadministrativa.php");
    }
    public function colores()
	{	
        $colores= new clscolores();
        $consultacolor= $colores->consultacolores();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmColores.php");
    }
    public function fotos()
	{	
        $productos=new clsproductos();
        $Categ = $productos->ConsultaProductos();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmFotos.php");
    }
    public function prodXdiseño()
	{	       
        $productos=new clsproductos();
        $Categ = $productos->ConsultaProductos();
        $Dis=new clsproductos();
        $Form = $Dis->ConsultaDiseño();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/ProdXdiseño.php");
        
    }
    public function productos()
	{	
        $productos=new clscategoria();
        $Categ = $productos->ConsultaCategoria();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmProductos.php");  
    }
    public function productosXcolor()
	{	
        $Colores=new clscolores();
        $color = $Colores->consultacolores();
        $productos=new clsproductos();
        $Categ = $productos->ConsultaProductos();
        $vista = "Vista/Inicio/frmpiedepagina.php";

        include_once("Vista/Administrativa/frmProdXColor.php");
        
    }
    public function Agregarcatalogo()
	{	
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmAgregarCategoria.php");
    }
    public function Diseño()
	{	
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmDiseños.php");
        
    }

}

?>