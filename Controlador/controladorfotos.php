<?php
include_once 'Modelo/clsfotos.php';
include_once 'Modelo/clsproductos.php';

class controladorfotos
{
    private $vista;
    public function Insertfotos()
    {	
        $productos=new clsfotos();
        $pro=new clsproductos();
        
        if(!empty($_POST))
        {

            $idProd=$_POST['Producto'];
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
            $productos->insertarFotos($img,$idProd);

            $Consulta=$pro->ConsultaProductos();
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmplantillaadministrativa.php");
        }
        else
        {
            $Consulta=$pro->ConsultaProductos();
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmFotos.php");
        }
    }

}
?>