<?php

class ItemInfoObject{
	
	private $raiz_iconName = "icon major ";
	private $icon_ItemInfo;
	private $title_ItemInfo;
	private $description_ItemInfo;
	
	
	
	public function set($icon_ItemInfo, $title_ItemInfo, $description_ItemInfo){
		$this->icon_ItemInfo = $this->raiz_iconName . $icon_ItemInfo;
		$this->title_ItemInfo = $title_ItemInfo;
		$this->description_ItemInfo = $description_ItemInfo;
		
	}
	
	/*
	public function printItemInfo($icon_sectionInfo, $title_ItemInfo, $description_ItemInfo){
	
		$texto = "<section><span class=" . $icon_sectionInfo . "></span><h3>" . $title_ItemInfo . "</h3><p>" .
				$description_ItemInfo . "</p></section>";
	
				return $texto;
	}
	*/
	
	public function printItemInfo(){
	
		$texto = "<section><span class=\"" . $this->icon_ItemInfo . "\"></span><h3>" . $this->title_ItemInfo . "</h3><p>" .
				$this->description_ItemInfo . "</p></section>";
	
				return $texto;
	}
	
	
	
	
	public function set_icon_ItemInfo($icon_ItemInfo) {
		$this->icon_ItemInfo = $icon_ItemInfo;
	}
	
	public function get_icon_ItemInfo() {
		return $this->icon_ItemInfo;
	}
	
	public function set_title_ItemInfo($title_ItemInfo) {
		$this->title_ItemInfo = $title_ItemInfo;
	}
	
	public function get_title_ItemInfo() {
		return $this->title_ItemInfo;
	}
	
	public function set_description_ItemInfo($description_ItemInfo) {
		$this->description_ItemInfo = $description_ItemInfo;
	}
	
	public function get_description_ItemInfo() {
		return $this->description_ItemInfo;
	}
	
	
}


?>