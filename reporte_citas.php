<?php
//siguiente codigo para incluir los arrcivos necesarios para la elaboracion de un formulario
require("fpdf/fpdf.php");
require("../Modelo/Conexion.php");
require("../Modelo/cita.php");
// encabezado para el reporte
class PDF extends FPDF
{
    // Cabecera pagina
    function Header()
    {
        //logo
        $this->image("images/logo.png",6,6,-550);
        //fuente letra arial 
        $this->SetFont("Arial","B",18);
        //mover derecha
        $this->Cell(60);
        //titulo
        $this->cell(90,10,"REPORTE DE CITAS",1,0,"c");
        //salto de linea
        $this->Ln(20);
    }
    //pie de pagina
    function Footer()
    {
        //poicion: a 1, cm del final
        $this->SetY(-15);
        //ARIAL italc 8
        $this->SetFont("Arial","I",8);
        //numero de pagina
        $this->Cell(0,10,utf8_decode("pagina ").$this->PageNo()."/{nb}",0,0,"c");

    }
}
//instanciamos un usuario para poder utilizar la funcion listar modelo
$model= new Cita();

//unstanciamos un elemento de la clase Pdf para usar todos sus atributos y metodos
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","B",10);
//se crean celdas con las que se va a trabajar para la creacion del reporte como si fueran celdas de una tabla
$pdf->Cell(10);
//se colocan los encabezados de las columnas del reporte (se pueden agregar los que necesiten)
$pdf->Cell(8,10,utf8_decode("id"),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode("fechaCita"),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode("horaCita"),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode("estadoCita"),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode("idEmpleadoFK"),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode("idClienteFK"),1,1,"c",0);
//usamos la funcion linstar para que consulte citas
$Cita=$model->Listar();
if($Cita!=null){
    foreach($Cita as $r){ 
    //posicion inicial de las celdas para el reporte
$pdf->Cell(10);
$pdf->Cell(8,10,utf8_decode($r["idCita"]),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode($r["fechaCita"]),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode($r["horaCita"]),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode($r["estadoCita"]),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode($r["idEmpleadoFK"]),1,0,"c",0);
$pdf->Cell(30,10,utf8_decode($r["idClienteFK"]),1,1,"c",0);
}
}
//muestra el reporte en una ventana nueva del navegador
$pdf->Output();
?>