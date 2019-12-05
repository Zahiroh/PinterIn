<?php
class pdf1 extends FPDF
{
// Page header
function Header() {
    // Arial bold 15
    for($i=10;$i<300;$i+=50){
      for($j=0;$j<200;$j+=23){
        $this->Image(base_url().'image/logo.png',$i,$j,30);
      }
    }

    $this->SetFont('Helvetica','B',25);
    // Move to the right
    //$this->Cell(80);
    // Title
    $this->Cell(0,10,'SERTIFIKAT AWARDING',1,1,'C');
    // Line break
    $this->Ln(20);
}
// Page footer
function Footer() {
    // Position at 1.5 cm from bottom
    $this->SetY(-28);
    // Arial italic 8
    $this->SetFont('Arial','I',14);
    $this->Cell(0, 10, 'Salam Hangat,',0, 1, 'C');
    $this->SetFont('Arial','I',10);
    $this->Cell(0, 10, 'Pinter.In 2018',0, 1, 'C');
    }
}
    // Instanciation of inherited class
    $this->pdfku = new pdf1('l');
    $this->pdfku->AliasNbPages();
    $this->pdfku->AddPage();
    $this->pdfku->SetFont('Times','',12);
    $this->pdfku->SetFontSize('30'); // set font size
    $this->pdfku->SetXY(10, 89); // set the position of the box
    $this->pdfku->Image(base_url().'image/parrot.png',20,70,80);
    $this->pdfku->Image(base_url().'image/parrot2.png',190,70,80);
    $this->pdfku->Cell(0,10,'diberikan kepada',0,1,'C');
    $this->pdfku->Cell(0, 10, $_SESSION['nama'], 0, 1, 'C'); // add the text, align to Center of cell
    // add the reason for certificate
    // note the reduction in font and different box position
    $this->pdfku->SetFontSize('15');
    //$this->pdfku->SetXY(80, 105);
    $this->pdfku->Cell(0, 10, 'Karena telah',0, 1, 'C');
    $this->pdfku->Cell(0, 10, 'menyelesaikan soal',0, 1, 'C');
    $this->pdfku->Cell(0, 10, 'Quiz '.$_SESSION['cat'],0, 1, 'C');
    $this->pdfku->Cell(0, 10, 'pada tanggal',0, 1, 'C');
    $this->pdfku->SetFontSize('14');
    $this->pdfku->Cell(0, 10, date('d-M-Y'), 0, 1, 'C');
    $this->pdfku->SetFontSize('20');
    $this->pdfku->Cell(0, 10, 'dengan nilai',0, 1, 'C');
    $this->pdfku->Cell(0, 10,$_SESSION['nilaiquiz'].'0', 0, 1, 'C');
    //for($i=1;$i<=40;$i++)
    //$this->pdfku->Cell(0,10,$tet.$i,0,1);
    $this->pdfku->Output();
?>
