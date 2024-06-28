<?php
// Inclua a biblioteca mPDF
require_once __DIR__ . '/vendor/autoload.php'; // Caminho para o autoload do mPDF

// Cria uma instância do mPDF
$mpdf = new \Mpdf\Mpdf();

// Define o conteúdo HTML
$mpdf->WriteHTML($html);

// Saída do PDF no navegador
$mpdf->Output();
?>