<?php
session_start();
include_once 'modelo/clsclientes.php';

class controladorregistro{
    private $vista;
    public function ingresar()
	{	
        include_once("Vista/Login/login.php");
    }
    public function usuarios()
	{	
        
        $empleado= new clsclientes();
        $consultaempleado= $empleado->consultaempleado();
        $vista = "Vista/Inicio/frmpiedepagina.php";
        include_once("Vista/Administrativa/frmusuarios.php");
    }
    public function Acceder()
    {
        
    	$clientes=new clsclientes();
    	if(!empty($_POST))
    	{
			$usuario=$_POST['txtNombre'];
    		$passw=$_POST['txtPass'];
    		$datos=$clientes->buscar($usuario,$passw);
			$usuario=$datos->fetch_object();
            if($datos->num_rows>0)
            {
                $_SESSION['TipoUsuario']=$usuario->tipo;
                if($_SESSION['TipoUsuario']=='administrador'){
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmplantillaadministrativa.php");
                }
                else if($_SESSION['TipoUsuario']=='cliente'){
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Publica/frmplantillapublica.php");
                }
              
            }else
            {
                include_once("Vista/denegado/frmdenegado1.php");
            }
        }
    }
    public function crearclientes()
    {
        $clientes= new clsclientes();
        if(!empty($_POST))
		{
			$nombre=$_POST['txtNombre'];
			$ap=$_POST['txtAP'];
			$am=$_POST['txtAM'];
            $tel=$_POST['txtTel'];
            $user=$_POST['txtUser'];
            $pass=$_POST['txtPass'];
			$clientes->AgregarClientes($nombre,$ap,$am,$tel,$user,$pass);
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Login/login.php");

		}
        else
    	{
            include_once("Vista/Login/Registro.php");
    	}
        
    }
    public function crearempleados()
    {
        $empleado= new clsclientes();
        if(!empty($_POST))
		{
			$nombre=$_POST['txtNombre'];
			$ap=$_POST['txtAP'];
			$am=$_POST['txtAM'];
            $tel=$_POST['txtTel'];
            $f=$_POST['txtRFC'];
            $user=$_POST['txtUser'];
            $pass=$_POST['txtPass'];
            $tipo=$_POST['selectTipo'];
			$empleado->AgregarEmpleados($nombre,$ap,$am,$tel,$f,$user,$pass,$tipo);
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmusuarios.php");

		}
        else
    	{
            $vista = "Vista/Inicio/frmpiedepagina.php";
            include_once("Vista/Administrativa/frmusuarios.php");
    	}
        
    }

	public function actualizarXeliminar()
	{	
	
        $empleado= new clsclientes();
		if(!empty($_POST))
		{
			if(isset($_POST['btnActualizar']))
			{
                $i=$_POST['txtcodigo'];
                $nombre=$_POST['txtNombre'];
                $ap=$_POST['txtAP'];
                $am=$_POST['txtAM'];
                $tel=$_POST['txtTel'];
                $f=$_POST['txtRFC'];
				$empleado->actualizarempleados($i,$nombre,$ap,$am,$tel,$f);
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmusuarios.php");

			}
			else if(isset($_POST['btnEliminar']))
			{
				
				$cod=$_POST['txtcodigo'];
				$empleado->eliminarempleado($codigo);
                $empleado= new clsclientes();
                $consultaempleado=$empleado->consultaempleado();
                $vista = "Vista/Inicio/frmpiedepagina.php";
                include_once("Vista/Administrativa/frmusuarios.php");

			}
			
		}
    }
    public function cerrarsesion(){
		session_destroy();
        $vista = "Vista/Inicio/frmpiedepagina.php";
		include_once("Vista/Inicio/frmplantillainicio.php");

	}

}
?>