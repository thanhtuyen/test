<?php
define('ROOT_PATH', str_replace('/protected', '', Yii::app()->basePath));

class Constants {
	/*
	 * List module menu
	 */	 
	public static $listModule = array(
		'image_slide' 		=> array(	'title' => 'Quản lý ImageSlide', 
										'url' => array('/imageslide/index'), 
										'header' => 'IMAGESLIDE'),
		

	);

	/*
	 * Define message
	 */	
	public static $listMessage = array(
		'no_data' 			=> '###TITLE### không có dữ liệu',
		'max_length' 		=> '###TITLE### cho phép nhập tối đa ###NUMBER### ký tự',
		'required'			=> '###TITLE### không được rỗng',
		'numerical'			=> 'Nhập ký tự số',
	);

}
?>