<?php

class ItemGalleryObject{
	
	private $pathDirImagen = "images/";
	
	private $hrefImagen_ItemGallery;
	private $pathImagen_ItemGallery;
	private $titulo_ItemGallery;
	private $descripcion_ItemGallery;
	private $hrefButton_ItemGallery;
	private $textButton_ItemGallery;
	
	
	public function set($hrefImagen_ItemGallery, $pathImagen_ItemGallery, $titulo_ItemGallery, $descripcion_ItemGallery, $hrefButton_ItemGallery, $textButton_ItemGallery){
		$this->hrefImagen_ItemGallery = $hrefImagen_ItemGallery;
		$this->pathImagen_ItemGallery = $this->pathDirImagen . $pathImagen_ItemGallery;
		$this->titulo_ItemGallery = $titulo_ItemGallery;
		$this->descripcion_ItemGallery = $descripcion_ItemGallery;
		$this->hrefButton_ItemGallery = $hrefButton_ItemGallery;
		$this->textButton_ItemGallery = $textButton_ItemGallery;		
	}
	/*
	
	public function printItemGallery($hrefImagen_ItemGallery, $pathImagen_ItemGallery, $titulo_ItemGallery, $descripcion_ItemGallery, $hrefButton_ItemGallery, $textButton_ItemGallery){
	
		$texto = "<section><a href=" . $hrefImagen_ItemGallery . " class=\"image\"><img src=" . $pathImagen_ItemGallery .
		" alt=\"\" data-position=\"center center\" /></a><div class=\"content\"><div class=\"inner\"><h2>" . $titulo_ItemGallery .
		"</h2><p>" . $descripcion_ItemGallery . "</p><ul class=\"actions\"><li><a href=" . $hrefButton_ItemGallery .
		" class=\"button\">" . $textButton_ItemGallery . "</a></li></ul></div></div></section>";
	
		return $texto;
	}
	*/
	
	public function printItemGallery(){

		$texto =		"<section>" .
							"<a href=\"" . $this->hrefImagen_ItemGallery . "\" class=\"image\"><img src=\"" . $this->pathImagen_ItemGallery . "\" alt=\"\" data-position=\"center center\" /></a>" .
							"<div class=\"content\">" .
								"<div class=\"inner\">" .
									"<h2>" . $this->titulo_ItemGallery . "</h2>" .
									"<p>" . $this->descripcion_ItemGallery . "</p>" .
									"<ul class=\"actions\">" .
										"<li><a href=\"" . $this->hrefButton_ItemGallery . "\" class=\"button\">" . $this->textButton_ItemGallery . "</a></li>" . 
									"</ul>" .
								"</div>" .
							"</div>" .
						"</section>";

 		return $texto;
	}
	
	

	
	
	
	
	public function set_hrefImagen_ItemGallery($hrefImagen_ItemGallery) {
		$this->hrefImagen_ItemGallery = $hrefImagen_ItemGallery;
	}
	
	public function get_hrefImagen_ItemGallery() {
		return $this->hrefImagen_ItemGallery;
	}
	
	public function set_pathImagen_ItemGallery($pathImagen_ItemGallery) {
		$this->pathImagen_ItemGallery = $pathImagen_ItemGallery;
	}
	
	public function get_pathImagen_ItemGallery() {
		return $this->pathImagen_ItemGallery;
	}
	
	public function set_titulo_ItemGallery($titulo_ItemGallery) {
		$this->titulo_ItemGallery = $titulo_ItemGallery;
	}
	
	public function get_titulo_ItemGallery() {
		return $this->titulo_ItemGallery;
	}
	
	public function set_descripcion_ItemGallery($descripcion_ItemGallery) {
		$this->descripcion_ItemGallery = $descripcion_ItemGallery;
	}
	
	public function get_descripcion_ItemGallery() {
		return $this->descripcion_ItemGallery;
	}
	
	public function set_hrefButton_ItemGallery($hrefButton_ItemGallery) {
		$this->hrefButton_ItemGallery = $hrefButton_ItemGallery;
	}
	
	public function get_hrefButton_ItemGallery() {
		return $this->hrefButton_ItemGallery;
	}
	
	public function set_textButton_ItemGallery($textButton_ItemGallery) {
		$this->textButton_ItemGallery = $textButton_ItemGallery;
	}
	
	public function get_textButton_ItemGallery() {
		return $this->textButton_ItemGallery;
	}
	
	
	
	
	
}


?>