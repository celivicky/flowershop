<?php
require('../../backend/pdf/fpdf.php');
date_default_timezone_set('America/Lima');
class PDF extends FPDF
{
 
function Header()
{
$this->Image('../../backend/images/triangulosrecortados.png',-1,-1,85);
$this->Image('../../backend/images/favicon.png',150,15,25);

$this->SetY(40);
$this->SetX(140);
$this->SetFont('Arial','B',12);

$this->SetTextColor(0, 0, 0 );
$this->Cell(10, 8, 'Reporte de categorias',0,1);
$this->SetY(45);
$this->SetX(145);
$this->SetFont('Arial','',8);
$this->Cell(47, 8, '');
$this->SetTextColor(30,10,32);
$this->Ln(30);

}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Floreria Doña Beatriz Online © Todos los derechos reservados."),0,0,"C");
        
}


}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(500);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetX(15);
$pdf->SetFillColor(16, 92, 173);
$pdf->SetDrawColor(255, 255, 255);
$pdf->SetTextColor(255,255,255);
// Cell(ancho , alto,texto,borde(0/1),salto(0/1),alineacion(L,C,R),rellenar(0/1)

$pdf->SetFont('Arial','B',10);

$pdf->Cell(185, 12, utf8_decode('Categoria'),1,1,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(65, 61, 61);
$pdf->SetTextColor(0,0,0);
require('../../backend/bd/ctconex.php');
//$consulta = "SELECT * FROM period";
//$resultado = mysqli_query($conexion,$consulta);
$stmt = $connect->prepare("SELECT * FROM categoria");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

while($row = $stmt->fetch()){
   
$pdf->SetFont('Arial','',10);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(65, 61, 61); 


$pdf->Cell(185, 8,utf8_decode($row['nomcat']),'B',1,'C',1);
  
    /*$pdf->Cell(25,9, $row['status'], 0 ,1, 'C',1);*/


}


//$pdf->Output();
$pdf->Output('categoria.pdf', 'D');
?>