<?php

// cargar configuracion excel
//echo "cargando IOFactory.php...";
include_once('../Excel/Classes/PHPExcel/IOFactory.php');
//echo "cargado IOFactory.php.";


$inputFileName = '../conf/confweb.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);

//$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->setActiveSheetIndexByName('index');

/******************************************************/
// MENU

$headTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$menuItem1 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$menuItem2 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$menuItem3 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$menuItem4 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();

/**********************************************************/
// INTRO

$introTitulo = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$introDescripcion = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$introBoton = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();

/****************************************************************/
// GALLERY

$numItemGallery = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();

$hrefImagen_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$pathImagen_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$titulo_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$descripcion_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$hrefButton_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$textButton_ItemGallery = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();

$hrefImagen_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$pathImagen_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$titulo_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$descripcion_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$hrefButton_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$textButton_ItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();

$hrefImagen_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
$pathImagen_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$titulo_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$descripcion_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
$hrefButton_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
$textButton_ItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();  /************************************/

$hrefImagen_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
$pathImagen_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
$titulo_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
$descripcion_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B32')->getValue();
$hrefButton_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B33')->getValue();
$textButton_ItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B34')->getValue();

$hrefImagen_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B35')->getValue();
$pathImagen_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B36')->getValue();
$titulo_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B37')->getValue();
$descripcion_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B38')->getValue();
$hrefButton_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B39')->getValue();
$textButton_ItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B40')->getValue();

$hrefImagen_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B41')->getValue();
$pathImagen_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B42')->getValue();
$titulo_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B43')->getValue();
$descripcion_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B44')->getValue();
$hrefButton_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B45')->getValue();
$textButton_ItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B46')->getValue();


require '../conf/ItemGalleryObject.php';


$itemGalleryObject = new ItemGalleryObject();
$itemGalleryObject->set($hrefImagen_ItemGallery, $pathImagen_ItemGallery, $titulo_ItemGallery, $descripcion_ItemGallery, $hrefButton_ItemGallery, $textButton_ItemGallery);

$itemGalleryObject2 = new ItemGalleryObject();
$itemGalleryObject2->set($hrefImagen_ItemGallery2, $pathImagen_ItemGallery2, $titulo_ItemGallery2, $descripcion_ItemGallery2, $hrefButton_ItemGallery2, $textButton_ItemGallery2);

$itemGalleryObject3 = new ItemGalleryObject();
$itemGalleryObject3->set($hrefImagen_ItemGallery3, $pathImagen_ItemGallery3, $titulo_ItemGallery3, $descripcion_ItemGallery3, $hrefButton_ItemGallery3, $textButton_ItemGallery3);

$itemGalleryObject4 = new ItemGalleryObject();
$itemGalleryObject4->set($hrefImagen_ItemGallery4, $pathImagen_ItemGallery4, $titulo_ItemGallery4, $descripcion_ItemGallery4, $hrefButton_ItemGallery4, $textButton_ItemGallery4);

$itemGalleryObject5 = new ItemGalleryObject();
$itemGalleryObject5->set($hrefImagen_ItemGallery5, $pathImagen_ItemGallery5, $titulo_ItemGallery5, $descripcion_ItemGallery5, $hrefButton_ItemGallery5, $textButton_ItemGallery5);

$itemGalleryObject6 = new ItemGalleryObject();
$itemGalleryObject6->set($hrefImagen_ItemGallery6, $pathImagen_ItemGallery6, $titulo_ItemGallery6, $descripcion_ItemGallery6, $hrefButton_ItemGallery6, $textButton_ItemGallery6);

$arrayItemsGallery = array($itemGalleryObject, $itemGalleryObject2, $itemGalleryObject3, $itemGalleryObject4, $itemGalleryObject5, $itemGalleryObject6);


/****************************************************************/
// INFO

$numItemInfo = $objPHPExcel->getActiveSheet()->getCell('B47')->getValue();   


$title_sectionInfo = $objPHPExcel->getActiveSheet()->getCell('B48')->getValue();
$description_sectionInfo = $objPHPExcel->getActiveSheet()->getCell('B49')->getValue();

$icon_ItemInfo = $objPHPExcel->getActiveSheet()->getCell('B50')->getValue();
$title_ItemInfo = $objPHPExcel->getActiveSheet()->getCell('B51')->getValue();
$description_ItemInfo = $objPHPExcel->getActiveSheet()->getCell('B52')->getValue();


$icon_ItemInfo2 = $objPHPExcel->getActiveSheet()->getCell('B53')->getValue();
$title_ItemInfo2 = $objPHPExcel->getActiveSheet()->getCell('B54')->getValue();
$description_ItemInfo2 = $objPHPExcel->getActiveSheet()->getCell('B55')->getValue();


$icon_ItemInfo3 = $objPHPExcel->getActiveSheet()->getCell('B56')->getValue();
$title_ItemInfo3 = $objPHPExcel->getActiveSheet()->getCell('B57')->getValue();
$description_ItemInfo3 = $objPHPExcel->getActiveSheet()->getCell('B58')->getValue();


$icon_ItemInfo4 = $objPHPExcel->getActiveSheet()->getCell('B59')->getValue();
$title_ItemInfo4 = $objPHPExcel->getActiveSheet()->getCell('B60')->getValue();
$description_ItemInfo4 = $objPHPExcel->getActiveSheet()->getCell('B61')->getValue();


$icon_ItemInfo5 = $objPHPExcel->getActiveSheet()->getCell('B62')->getValue();
$title_ItemInfo5 = $objPHPExcel->getActiveSheet()->getCell('B63')->getValue();
$description_ItemInfo5 = $objPHPExcel->getActiveSheet()->getCell('B64')->getValue();


$icon_ItemInfo6 = $objPHPExcel->getActiveSheet()->getCell('B65')->getValue();
$title_ItemInfo6 = $objPHPExcel->getActiveSheet()->getCell('B66')->getValue();
$description_ItemInfo6 = $objPHPExcel->getActiveSheet()->getCell('B67')->getValue();




require '../conf/ItemInfoObject.php';

$itemInfoObject = new ItemInfoObject();
$itemInfoObject2 = new ItemInfoObject();
$itemInfoObject3 = new ItemInfoObject();
$itemInfoObject4 = new ItemInfoObject();
$itemInfoObject5 = new ItemInfoObject();
$itemInfoObject6 = new ItemInfoObject();

$itemInfoObject->set($icon_ItemInfo, $title_ItemInfo, $description_ItemInfo);
$itemInfoObject2->set($icon_ItemInfo2, $title_ItemInfo2, $description_ItemInfo2);
$itemInfoObject3->set($icon_ItemInfo3, $title_ItemInfo3, $description_ItemInfo3);
$itemInfoObject4->set($icon_ItemInfo4, $title_ItemInfo4, $description_ItemInfo4);
$itemInfoObject5->set($icon_ItemInfo5, $title_ItemInfo5, $description_ItemInfo5);
$itemInfoObject6->set($icon_ItemInfo6, $title_ItemInfo6, $description_ItemInfo6);

$arrayItemsInfo = array($itemInfoObject, $itemInfoObject2, $itemInfoObject3, $itemInfoObject4, $itemInfoObject5, $itemInfoObject6);


$hrefButton_sectionInfo = $objPHPExcel->getActiveSheet()->getCell('B68')->getValue();
$textoButton_sectionInfo = $objPHPExcel->getActiveSheet()->getCell('B69')->getValue();

/***********************************************************/
// CONTACT

$title_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B70')->getValue();
$description_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B71')->getValue();

$address_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B72')->getValue();
$hrefEmail_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B73')->getValue();
$email_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B74')->getValue();
$telephone_sectionContact = $objPHPExcel->getActiveSheet()->getCell('B75')->getValue();


$objPHPExcel->setActiveSheetIndexByName('emailconf');
$emailto_formContact = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$objPHPExcel->setActiveSheetIndexByName('index');


/***********************************************************/
// SOCIAL

$numItemSocial = $objPHPExcel->getActiveSheet()->getCell('B76')->getValue();

$href_item1_social = $objPHPExcel->getActiveSheet()->getCell('B77')->getValue();
$href_icon1_social = $objPHPExcel->getActiveSheet()->getCell('B78')->getValue();
$href_name1_social = $objPHPExcel->getActiveSheet()->getCell('B79')->getValue();
$href_item2_social = $objPHPExcel->getActiveSheet()->getCell('B80')->getValue();
$href_icon2_social = $objPHPExcel->getActiveSheet()->getCell('B81')->getValue();
$href_name2_social = $objPHPExcel->getActiveSheet()->getCell('B82')->getValue();
$href_item3_social = $objPHPExcel->getActiveSheet()->getCell('B83')->getValue();
$href_icon3_social = $objPHPExcel->getActiveSheet()->getCell('B84')->getValue();
$href_name3_social = $objPHPExcel->getActiveSheet()->getCell('B85')->getValue();
$href_item4_social = $objPHPExcel->getActiveSheet()->getCell('B86')->getValue();
$href_icon4_social = $objPHPExcel->getActiveSheet()->getCell('B87')->getValue();
$href_name4_social = $objPHPExcel->getActiveSheet()->getCell('B88')->getValue();
$href_item5_social = $objPHPExcel->getActiveSheet()->getCell('B89')->getValue();
$href_icon5_social = $objPHPExcel->getActiveSheet()->getCell('B90')->getValue();
$href_name5_social = $objPHPExcel->getActiveSheet()->getCell('B91')->getValue();

require 'ItemSocialObject.php';

$itemSocialObject = new  ItemSocialObject();
$itemSocialObject2 = new  ItemSocialObject();
$itemSocialObject3 = new  ItemSocialObject();
$itemSocialObject4 = new  ItemSocialObject();
$itemSocialObject5 = new  ItemSocialObject();

$itemSocialObject->set($href_item1_social, $href_icon1_social, $href_name1_social);
$itemSocialObject2->set($href_item2_social, $href_icon2_social, $href_name2_social);
$itemSocialObject3->set($href_item3_social, $href_icon3_social, $href_name3_social);
$itemSocialObject4->set($href_item4_social, $href_icon4_social, $href_name4_social);
$itemSocialObject5->set($href_item5_social, $href_icon5_social, $href_name5_social);

$arrayItemsSocial = array($itemSocialObject, $itemSocialObject2, $itemSocialObject3, $itemSocialObject4, $itemSocialObject5);


$companyName_footer = $objPHPExcel->getActiveSheet()->getCell('B92')->getValue();


?>