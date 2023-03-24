<?php

require_once 'dompdf/autoload.inc.php';
require_once 'node_modules/phpqrcode/qrlib.php';

// Define el texto para el código QR
$qr_text = 'Hola, este es un código QR generado con PHP';

// Genera el código QR como una imagen PNG
QRcode::png($qr_text, 'qr.png');

// Carga la imagen PNG en DOMPDF y genera el archivo PDF
$dompdf = new Dompdf\Dompdf();
$html = '<html><body><img src="qr.png"></body></html>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

// Descarga el archivo PDF
$dompdf->stream('qr.pdf', array('Attachment' => true));


?>