<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new Mpdf();

$mpdf->Bookmark('Start of the document');

$mpdf->Output();
?>