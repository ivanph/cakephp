<?php
App::import('Vendor','tcpdf');
$tcpdf = new TCPDF();
$textfont = 'times new roman';
$tcpdf->SetCreator(PDF_CREATOR);
$tcpdf->SetAuthor("autor");
$tcpdf->SetTitle("Título");
$tcpdf->SetSubject("Tutorial TCPDF en cakePHP");
$tcpdf->SetKeywords("TCPDF, PDF, cakePHP, ejemplo");
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$tcpdf->setLanguageArray($l);
$tcpdf->AliasNbPages();
$tcpdf->AddPage();
$tcpdf->SetFont("times", "B", 20);
$tcpdf->Cell(0,10,"Hola mundo",1,1,'C');
$tcpdf->Output("ejemplo.pdf", "I");
?>