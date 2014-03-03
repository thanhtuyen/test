<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
  //'type'=>'Striped',
  'template'=>"{items}",
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'userid',
		'username',
		'user_fullname',
		'user_mobile',
		'user_address',
		/*
		'user_role',
		'create_date',
		'create_user',
		'update_date',
		'usercol',
		*/
    array(
      'class'=>'bootstrap.widgets.TbButtonColumn',
      'htmlOptions'=>array('style'=>'width: 50px'),
    ),
	),
));
?>