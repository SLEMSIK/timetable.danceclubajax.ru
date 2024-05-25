<?php
require_once __DIR__ . '/PHPExcel-1.8/Classes/PHPExcel.php';
require_once __DIR__ . '/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
 
$xls = new PHPExcel();

$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('Бальный танец');

$sheet->setCellValueExplicit("A1", '1.', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->setCellValueExplicit("A2", '10.0', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->setCellValueExplicit("A3", '0.1', PHPExcel_Cell_DataType::TYPE_STRING);

$objWriter = new PHPExcel_Writer_Excel2007($xls);
$objWriter->save(__DIR__ . '/file.xlsx');