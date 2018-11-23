<?php

// cargar configuracion excel
//echo "cargando IOFactory.php...";
include_once('../Excel/Classes/PHPExcel/IOFactory.php');
//echo "cargado IOFactory.php.";


$inputFileName = '../conf/confweb.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);


/******************************************************/
// MENU

//$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->setActiveSheetIndexByName('supporting1');

$headTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$hrefTitleMenu = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$titleMenu = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$title = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$hrefItemMenu1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$textoItemMenu1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$hrefItemMenu2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$textoItemMenu2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$hrefItemMenu3 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$textoItemMenu3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$pathImagen = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$textoParrafo1 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$textoParrafo2 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();

/**********************************************************/

?>

 
 
 
 
 
 
 
 
 
 
 
 
 
