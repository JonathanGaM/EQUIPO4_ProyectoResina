<?php
include_once 'Modelo/clsconexion.php';

class clsadministrador extends clsconexion{
	
	public function insertarprodColor($idprod,$idcol,$img,$prec)
	{
		$sql = "CALL Sp_InsertProdColor($idprod,$idcol,'$img',$prec);";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	

}
?>