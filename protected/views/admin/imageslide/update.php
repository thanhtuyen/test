<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imageslide', 'url'=>array('index')),
	array('label'=>'Create Imageslide', 'url'=>array('create')),
	array('label'=>'View Imageslide', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1>Update Imageslide <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>