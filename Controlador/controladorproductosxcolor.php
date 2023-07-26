<?php
include_once 'Modelo/clsadministrador.php';
include_once 'Modelo/clsproductos.php';
include_once 'Modelo/clscolores.php';

class controladorproductosxcolor{
private $vista;
    public function ProductoXColor()
    {
        $productos=new clsproductos();
        $Categ=$productos->ConsultaProductos();
        $Color=new clscolores();
        $color = $Color->Consultacolores();
        $vista = "Vista/Inicio/frmpiedepagina.php";

        include_once("Vista/Administrativa/frmProdXColor.php");
    }
    public function ProductoColor()
	{	
		if(!empty($_POST))
		{
        $productos=new clsproductos();
        $Color=new clscolores();
  
			$idprod=$_POST['Producto'];
            $idcol=$_POST['Color'];
            $prec=$_POST['txtprecio'];
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
            $productos->insertarprodColor($idprod,$idcol,$img,$prec);
			$Categ=$productos->ConsultaProductos();
            $color = $Color->Consultacolores();

            $vista = "Vista/Inicio/frmpiedepagina.php";

            include_once("Vista/Administrativa/frmProdXColor.php");
		}
		else
		{
			$Categ=$productos->ConsultaProductos();
            $color = $Color->ConsultaColor();
            $vista = "Vista/Inicio/frmpiedepagina.php";

            include_once("Vista/Administrativa/frmProdXColor.php");
		}
        
    }


}
?>