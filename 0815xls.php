<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2', 'Hello World !');
$sheet->setCellValue('A3', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world2.xlsx');