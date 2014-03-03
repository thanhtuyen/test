<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid,
);

$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->userid)),
//	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->userid; ?></h1>
<div class="view_user">

  <?php $this->widget('bootstrap.widgets.TbDetailView',array(
    'data'=>$model,
    'attributes'=>array(
      'username',
//      'userpass',
      'user_fullname',
      'user_mobile',
      'user_address',
      'create_user',

      array('name' => 'create_date',
        'value' => $model->create_date? $model->create_date:""),

      array('name' => 'update_date',
        'value' => $model->update_date? $model->update_date:''),

    ),
  )); ?>

</div>
