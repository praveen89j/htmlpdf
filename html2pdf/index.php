<?php
require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("CV-Template/index.html","r");
$strContent = fread($fp, filesize("CV-Template/index.html"));
$strContent = str_replace('[mobile]','9892936747',$strContent);
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("Template.pdf");
echo "PDF file is generated successfully!";
?>