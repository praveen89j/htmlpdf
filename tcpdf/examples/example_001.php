<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// Add a page
$pdf->AddPage();
$fp = fopen("../CV-Template/index.html","r");
$strContent = fread($fp, filesize("../CV-Template/index.html"));
$html = str_replace('[mobile]','9892936747',$strContent);
// Set some content to print
 

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('examplesss_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
