<?php

class SupportConfReaderObject{
	
	private $objPHPExcel;
	
	public $headTitle;
	public $hrefTitleMenu;
	public $titleMenu;
	public $title;
	public $hrefItemMenu1;
	public $textoItemMenu1;
	public $hrefItemMenu2;
	public $textoItemMenu2;
	public $hrefItemMenu3;
	public $textoItemMenu3;
	public $pathImagen;
	public $textoParrafo1;
	public $textoParrafo2;
	
	
	public function init(){
		// cargar configuracion excel
		//echo "cargando IOFactory.php...";
		include_once('../Excel/Classes/PHPExcel/IOFactory.php');
		//echo "cargado IOFactory.php.";		
		$inputFileName = '../conf/confweb.xls';		
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName); 
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$this->objPHPExcel = $objReader->load($inputFileName);
		//echo "terminado init()<br>";
	}
	
	public function setActiveSheetByName($name){
		$this->objPHPExcel->setActiveSheetIndexByName($name);	
		//echo "terminado setActiveSheetByName()<br>";
		
	}	
	
	public function load(){
		$this->headTitle = $this->objPHPExcel->getActiveSheet()->getCell('B2')->getValue(); //echo "load() : headTitle = " . $this->headTitle;
		$this->hrefTitleMenu = $this->objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		$this->titleMenu = $this->objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		$this->title = $this->objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$this->hrefItemMenu1 = $this->objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$this->textoItemMenu1 = $this->objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$this->hrefItemMenu2 = $this->objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$this->textoItemMenu2 = $this->objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$this->hrefItemMenu3 = $this->objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$this->textoItemMenu3 = $this->objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$this->pathImagen = $this->objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$this->textoParrafo1 = $this->objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$this->textoParrafo2 = $this->objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		
		//echo "terminado load()<br>";
		
	}
	
	
	/*******************************************************************/
	// GETTERS AND SETTERS
	
	public function set_headTitle($headTitle) {
		$this->headTitle = $headTitle;
	}
	
	public function get_headTitle() {
		return $this->headTitle;
	}
	
	public function set_hrefTitleMenu($hrefTitleMenu) {
		$this->hrefTitleMenu = $hrefTitleMenu;
	}
	
	public function get_hrefTitleMenu() {
		return $this->hrefTitleMenu;
	}
	
	public function set_titleMenu($titleMenu) {
		$this->titleMenu = $titleMenu;
	}
	
	public function get_titleMenu() {
		return $this->titleMenu;
	}
	
	public function set_title($title) {
		$this->title = $title;
	}
	
	public function get_title() {
		return $this->title;
	}
	
	public function set_hrefItemMenu1($hrefItemMenu1) {
		$this->hrefItemMenu1 = $hrefItemMenu1;
	}
	
	public function get_hrefItemMenu1() {
		return $this->hrefItemMenu1;
	}
	
	public function set_textoItemMenu1($textoItemMenu1) {
		$this->textoItemMenu1 = $textoItemMenu1;
	}
	
	public function get_textoItemMenu1() {
		return $this->textoItemMenu1;
	}
	
	public function set_hrefItemMenu2($hrefItemMenu2) {
		$this->hrefItemMenu2 = $hrefItemMenu2;
	}
	
	public function get_hrefItemMenu2() {
		return $this->hrefItemMenu2;
	}
	
	public function set_textoItemMenu2($textoItemMenu2) {
		$this->textoItemMenu2 = $textoItemMenu2;
	}
	
	public function get_textoItemMenu2() {
		return $this->textoItemMenu2;
	}
	
	public function set_hrefItemMenu3($hrefItemMenu3) {
		$this->hrefItemMenu3 = $hrefItemMenu3;
	}
	
	public function get_hrefItemMenu3() {
		return $this->hrefItemMenu3;
	}
	
	public function set_textoItemMenu3($textoItemMenu3) {
		$this->textoItemMenu3 = $textoItemMenu3;
	}
	
	public function get_textoItemMenu3() {
		return $this->textoItemMenu3;
	}
	
	public function set_pathImagen($pathImagen) {
		$this->pathImagen = $pathImagen;
	}
	
	public function get_pathImagen() {
		return $this->pathImagen;
	}
	
	public function set_textoParrafo1($textoParrafo1) {
		$this->textoParrafo1 = $textoParrafo1;
	}
	
	public function get_textoParrafo1() {
		return $this->textoParrafo1;
	}
	
	public function set_textoParrafo2($textoParrafo2) {
		$this->textoParrafo2 = $textoParrafo2;
	}
	
	public function get_textoParrafo2() {
		return $this->textoParrafo2;
	}	
}

?>