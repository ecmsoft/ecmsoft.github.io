<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$sede = $_POST['sede'];
$tipo = $_POST['tipo'];
$numero = $_POST['numero'];
$nivel = $_POST['nivel'];
$asignatura = $_POST['asignatura'];

$cantidad = $_POST['cantidad'];

ob_start();
require_once 'print-view.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'LETTER', 'es', true, 'UTF-8', 3);
$html2pdf->writeHTML($html);
$html2pdf->output('hoja-de-ruta.pdf');

?>