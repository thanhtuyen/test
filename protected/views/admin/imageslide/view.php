<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Imageslide', 'url'=>array('index')),
	array('label'=>'Create Imageslide', 'url'=>array('create')),
	array('label'=>'Update Imageslide', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Imageslide', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1>View Imageslide #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image_path',
		'title',
		'caption',
		'title_eng',
		'caption_eng',
		'create_date',
		'create_user_id',
		'update_date',
		'del_flg',
		'imageslidecol',
	),
)); ?>
