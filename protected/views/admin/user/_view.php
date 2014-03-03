<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userid), array('view', 'id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userpass')); ?>:</b>
	<?php echo CHtml::encode($data->userpass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->user_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->user_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_role')); ?>:</b>
	<?php echo CHtml::encode($data->user_role); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercol')); ?>:</b>
	<?php echo CHtml::encode($data->usercol); ?>
	<br />

	*/ ?>

</div>