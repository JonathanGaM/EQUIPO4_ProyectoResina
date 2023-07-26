<?php
include_once 'Modelo/clsconexion.php';

class clsdiseños extends clsconexion{


	public function insertDiseño($formas,$img)
	{
		$sql = "CALL Sp_InsertarDiseño('$formas','$img');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
}
?>
