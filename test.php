<?php
require 'vendor/autoload.php';

use  \Spatie\PdfToText\Pdf;

$pdfPath = '/usr/local/Cellar/poppler/0.62.0/bin/pdftotext'; //path of command pdftotext

$text = (new Pdf($pdfPath))
    ->setPdf('test.pdf')
    ->text();


print_r($text); exit;