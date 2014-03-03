<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imageslide', 'url'=>array('index')),
	array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1>Create Imageslide</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>