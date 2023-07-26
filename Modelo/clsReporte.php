<?php
include_once 'Modelo/clsconexion.php';

class clsReporte extends clsconexion{

	
	public function ConsulaProdXColor()
	{
		$sql = "CALL Sp_ConsultaProdXCOlor();";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	public function reporteprodcateg()
	{
        $sql= "CALL Sp_ConsultaprodCateg();";

		$resultado=$this->conectar->query($sql);

		return $resultado;
	}
}
    ?>