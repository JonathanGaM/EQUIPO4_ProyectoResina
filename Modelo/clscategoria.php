<?php
include_once 'Modelo/clsconexion.php';

class clscategoria extends clsconexion{

	public function AgregarCategoria($categ,$img)
	{
		$sql = "CALL Sp_AgregarCategoria('$categ','$img');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
    public function ConsultaCategoria()
	{
		$sql = "CALL Sp_ConsultaCategoria();";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	public function fundas($catg)
	{

		$sql = "CALL Sp_ConsultaProductos('$catg');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	

	
}
?>
