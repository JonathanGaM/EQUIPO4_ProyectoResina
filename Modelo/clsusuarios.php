<?php
include_once 'Modelo/clsconexion.php';

class clsusuarios extends clsconexion{
    public function consultausuario()
	{
		$sql = "";
		$resultado = $this->conectar->query($sql);
        $usuario = array();
        if ($resultado !== false && $resultado->num_rows > 0) {
            while ($row = $resultado->fetch_object()) {
                $usuario[] = $row;
            }
        }
		return $resultado;
	}



}
?>