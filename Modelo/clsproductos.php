<?php
include_once 'Modelo/clsconexion.php';

class clsproductos extends clsconexion{
    public function consultaproductos(){
		$sql = "CALL Sp_Productos()";
		$resultado = $this->conectar->query($sql);

		return $resultado;
    }
	

	public function TodosLosProductos()
	{
		$sql = "CALL Sp_TodosLosProductos()";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
    public function insertarProductos($Nom,$idCat,$img,$precio,$descp) {
		
		$sql = "CALL Sp_InsertarProductos('$Nom',$idCat,'$img',$precio,'$descp');";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
    public function productosXdiseño($idProd,$idDis)
	{
		$sql = "CALL Sp_ProductoxDiseño($idProd,$idDis);";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
    public function ConsultaDiseño()
	{
		$sql = "CALL Sp_ConsultaDiseño();";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}		
	public function insertarprodColor($idprod,$idcol,$img,$prec)
	{
		$sql = "CALL Sp_InsertProdColor($idprod,$idcol,'$img',$prec);";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	public function ConsultaDetallesProductos($Prod)
	{
		$sql = "CALL Sp_ConsultaDetallesProd('$Prod')";
		$resultado = $this->conectar->query($sql);
	
		if (!$resultado) {
			$this->error = $this->conectar->error;
			return false;
		}
		
		return $resultado;
	}
	
	public function getError(){
		return $this->error;
	}
}
?>
