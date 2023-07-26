<?php
include_once 'Modelo/clsconexion.php';

class clsclientes extends clsconexion{

	public function buscar($usuario,$passw)
	{
		$sql = "CALL Sp_buscarusuario('$usuario','$passw');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	
	public function AgregarClientes($nombre,$ap,$am,$tel,$user,$pass)
	{
		$sql = "CALL Sp_agregarcliente('$nombre','$ap','$am','$tel','$user','$pass','cliente');";
       
		$resultado = $this->conectar->query($sql);
		
		
		return $resultado;
	}
		
	public function AgregarEmpleados($nombre,$ap,$am,$tel,$f,$user,$pass,$tipo)
	{
		$sql = "CALL Sp_crearempleados('$nombre','$ap','$am','$tel','$f','$user','$pass','$tipo');";
       
		$resultado = $this->conectar->query($sql);
		
	
		return $resultado;
	}
	public function actualizarempleados($i,$nombre,$ap,$am,$tel,$f)
	{
		$sql = "CALL Sp_actualizarempleado('$i','$nombre','$ap','$am','$tel','$f');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function eliminarempleado($cod)
	{
		$sql = "CALL Sp_eliminarempleado('$cod');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function consultaempleado()
	{
		$sql = "CALL Sp_consultaempleado();";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	
}
?>
