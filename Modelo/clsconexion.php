<?php
class clsconexion{

    private $servidor='localhost';
    private $Base='bdresina';
    private $usuario='root';
    private $pas='';

    public $conectar=null;

    function __construct(){
        $this->conectar = new mysqli($this->servidor, $this->usuario, $this->pas, $this->Base);

        if (mysqli_connect_errno()) {
            printf("ERROR EN LA CONEXION %s\n", mysqli_connect_error());
            exit();
        }
    }
}

?>