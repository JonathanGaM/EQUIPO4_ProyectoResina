<?php
include_once 'Modelo/clsclientes.php';
include_once 'Modelo/clscategoria.php';
class controladorcatalogo{
    private $vista;
    public function catalogo()
	{	$catalogos=new clscategoria();
        $Consulta =$catalogos->ConsultaCategoria();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Inicio/catalogo/frmcatalogo.php");
    }

    public function Insertarcatalogo()
	{	
        $catalogo = new clscategoria();
        if(!empty($_POST))
		{
			$categ=$_POST['nombre'];

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
            $catalogo->AgregarCategoria($categ,$img);
            $vista = "Vista/Inicio/frmpiedepagina.php";

            include_once("Vista/Administrativa/frmAgregarCategoria.php");
        

		}
        else
    	{
            $vista = "Vista/Inicio/frmpiedepagina.php";

            include_once("Vista/Administrativa/frmAgregarCategoria.php");
    	}

    }


}
?>