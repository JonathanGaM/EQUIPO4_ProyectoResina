<?php

include_once 'Modelo/clsReporte.php';
include_once 'LibreriaFPDF/fpdf.php';

class controladorreportes
{
	private $vista;
	
	public function consProdxDis()
	{	
	
		$fabricante=new clsReporte();
        if(empty($_POST))
		{
           
		    $pdf = new FPDF();
		
		    $pdf->AddPage();
		    $pdf->Cell(190,30,$pdf->Image('Estilos\Imagenes\logo.jpg',130,12,60,30),0,1,'R');
		
		    $pdf->SetFont('Arial', 'B', 14);
		    $pdf->Cell(0, 10,utf8_decode('Reporte de los colores que contienen las fundas'), 0, 1, 'C');

            
            $Consulta=$fabricante->ConsulaProdXColor();	    
            $pdf->SetLeftMargin(20);
            if ($Consulta->num_rows > 0) {
        
                $pdf->SetFont('Arial', 'B', 10);

                $pdf->Cell(50, 10, 'Nombre', 1, 0, 'C');

                $pdf->Cell(20, 10, 'Color', 1, 1, 'C');
            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 9);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(50, 10, $row["Nombre"], 1, 0, 'L');
 
                    $pdf->Cell(20, 10, $row["colores"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $fabricante->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

            $fabricante->conectar->close();
            //******************	
            
           
        }else
        {
            $vista="Vista/Administrativa/frmReporte";
			include_once("Vista/Administrativa/frmReporte");
        }

    }
    public function reporteprodcateg()
	{	
	
		$fabricante=new clsReporte();
        if(empty($_POST))
		{
            //recibo la caja de texto del formulario html

           
            // Crear el objeto FPDF
		    $pdf = new FPDF();
		
		    // Agregar una página
		    $pdf->AddPage();
		    $pdf->Cell(190,30,$pdf->Image('Estilos\Imagenes\logo.jpg',130,12,60,30),0,1,'R');
		
		    // Establecer la fuente y el tamaño del título
		    $pdf->SetFont('Arial', 'B', 14);
		    $pdf->Cell(0, 10,utf8_decode('Reporte nombre de fabricante de productos'), 0, 1, 'C');

		    // Consulta a la base de datos
            
            $Consulta=$fabricante->reporteprodcateg();	    
		    //Centrar la tabla
            $pdf->SetLeftMargin(60);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 10);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(50, 10, 'Producto', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Categoria', 1, 1, 'C');
            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 9);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(50, 10, $row["Nombre"], 1, 0, 'L');
                    $pdf->Cell(20, 10, $row["categoria"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $fabricante->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

            $fabricante->conectar->close();
            //******************	
            
           
        }else
        {
            $vista="Vistas/Fabricante/frmReportes2.php";
			include_once("Vistas/frmplantilla.php");
        }

    }
   
}
?>