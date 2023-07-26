<?php
include_once 'Modelo/clsproductos.php';
class controladorproductos
{
    private $vista;
    public function Insertarproductos()
	{	
        $productos=new clsproductos();
		
		if(!empty($_POST))
		{
			$Nom=$_POST['txtnombre'];
			$idCat=$_POST['Categoria'];
			$precio=$_POST['txtprecio'];
            $descp=$_POST['txtdescripcion'];
            if(isset($_FILES['txtimagen'])&& $_FILES['txtimagen']['error']===UPLOAD_ERR_OK){
                $Nameimg=$_FILES['txtimagen']['name'];
                $tipoArchivo=$_FILES['txtimagen']['type'];
                $whimg=$_FILES['txtimagen']['size'];
                $rutaTemp=$_FILES['txtimagen']['tmp_name'];
                $extenciones=array('jpeg','jpg','png');
                $extencion=pathinfo($Nameimg,PATHINFO_EXTENSION);
                if(!in_array($extencion,$extenciones)){
                    echo "la imagen no tiene un formato aceptado en el servidor";
                    exit;
                }                
                $maxwh=3*1024*1024;
                if($whimg>$maxwh){
                    echo "La imagen excede el tamañao permitido";
                    exit;
                }
                $Nameimg=uniqid('txtimagen').'.'.$extencion;
                $ruta="imagenes/fotos".$Nameimg;
                if(!move_uploaded_file($rutaTemp,$ruta)){
                    echo "Error al cargar la imagen a la ruta destino";
                    exit;
                }
                $img = $Nameimg;

            }    
            $productos->insertarProductos($Nom,$idCat,$img,$precio,$descp);
			$Categ=$productos->TodosLosProductos();
            $vista = "Vista/Inicio/frmpiedepagina.php";
        	include_once("Vista/Administrativa/frmProductos.php");
		}
		else
		{
			$Consulta=$productos->TodosLosProductos();
            $vista = "Vista/Inicio/frmpiedepagina.php";
        	include_once("Vista/Administrativa/frmProductos.php");
		}
    }
}

?>