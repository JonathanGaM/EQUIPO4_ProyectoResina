<?php
include_once 'Modelo/clsconexion.php';

class clscolores extends clsconexion{
    public function agregarcolores($col)
	{
		$sql = "CALL Sp_agregarcolores('$col');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
    public function consultacolores()
	{
		$sql = "CALL Sp_consultacolores();";
		$resultado = $this->conectar->query($sql);

		return $resultado;
	}		
    public function actualizarcolores($codigo,$colo)
	{
		$sql = "CALL Sp_actializarcolor('$codigo','$colo');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
    public function eliminarcolores($codigo)
    {
        $sql = "CALL Sp_eliminarcolor('$codigo');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;

    }
}
?>