<?php
/* @var $this ImageslideController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imageslides',
);

$this->menu=array(
	array('label'=>'Create Imageslide', 'url'=>array('create')),
	array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1><?php echo Constants::$listModule['image_slide']['title']?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$modelImageSlideSearch->adminImageSlideSearch(),
	'itemView'=>'_view',
)); ?>
