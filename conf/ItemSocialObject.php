<?php

class ItemSocialObject{
	
	private $href_item1_social;
	private $href_icon1_social;
	private $href_name1_social;
	
	
	public function set($href_item1_social, $href_icon1_social, $href_name1_social){
		
		$this->href_item1_social = $href_item1_social;
		$this->href_icon1_social = $href_icon1_social;
		$this->href_name1_social = $href_name1_social;		
	}
	
	public function printItemSocial(){
	
		$texto = "<li><a href=\"" . $this->href_item1_social . "\" class=\"" . 
				$this->href_icon1_social . "\"><span class=\"label\">" . 
				$this->href_name1_social . "></span></a></li>";
	
		return $texto;
	}
	
	
}

?>
