<?php
include_once 'Modelo/clsdiseños.php';

class controladordiseños{
    private $vista;
    public function InsertarDiseño()
	{	
        if(!empty($_POST))
		{
        $Dis=new clsdiseños();

			$formas=$_POST['txtDiseño'];
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
            $Dis->insertDiseño($formas,$img);
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmDiseños.php");
		}
		else
		{                
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmDiseños.php");
		}
        
    }

}
?>