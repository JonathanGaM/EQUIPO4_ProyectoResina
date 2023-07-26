<?php
include_once 'Modelo/clsproductos.php';

class controladorproductoxdiseño{
    private $vista;
public function insertar_ProdxDiseño()
	{	
        if(!empty($_POST))
		{
        $productos=new clsproductos();
        

			$idProd=$_POST['Producto'];
            $idDis=$_POST['Diseño'];  
            $productos->productosXdiseño($idProd,$idDis);
			$Categ=$productos->ConsultaProductos();
            $Form = $productos->ConsultaDiseño();
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmProductos.php");
		}
		else
		{
			$Categ->$productos->ConsultaProductos();
            $Form = $productos->ConsultaDiseño();
            $vista = "Vista/Inicio/frmpiedepagina.php";

            include_once("Vista/Administrativa/ProdXdiseño.php");
		}
        
    }
}
?>