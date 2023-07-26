<?php
include_once 'Modelo/clsconexion.php';

class clsfotos extends clsconexion{

public function insertarFotos($img,$idProd) {
		
		$sql = "CALL Sp_InsertarFotos('$img',$idProd);";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
}
?>