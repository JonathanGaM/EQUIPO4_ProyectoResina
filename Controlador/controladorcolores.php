<?php
include_once 'Modelo/clscolores.php';

class controladorcolores
{
    private $vista;
    public function agregarcolores()
    {
        $colores= new clscolores();

            if(!empty($_POST))
            {
                $col=$_POST['txtcolor'];
                $colores->Agregarcolores($col);
                $colores= new clscolores();
                $consultacolor= $colores->consultacolores();
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmColores.php");
    
            }
            else
            {
                $colores= new clscolores();
                $consultacolor= $colores->consultacolores();
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmColores.php");
            }
    

    }
	public function actualizarXeliminar()
	{	
	
		$colores=new clscolores();
		if(!empty($_POST))
		{
			if(isset($_POST['btnActualizar']))
			{
				
				$codigo=$_POST['txtcodigo'];
				$colo=$_POST['txtcolor'];
				$colores->actualizarcolores($codigo,$colo);
                $colores= new clscolores();
                $consultacolor=$colores->consultacolores();
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmColores.php");

			}
			else if(isset($_POST['btnEliminar']))
			{
				
				$codigo=$_POST['txtcodigo'];
				$colores->eliminarcolores($codigo);
                $colores= new clscolores();
                $consultacolor=$colores->consultacolores();
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmColores.php");

			}
			
		}
    }
    
}

?>