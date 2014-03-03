<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imageslide-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_eng'); ?>
		<?php echo $form->textField($model,'title_eng',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption_eng'); ?>
		<?php echo $form->textField($model,'caption_eng',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'caption_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_flg'); ?>
		<?php echo $form->textField($model,'del_flg'); ?>
		<?php echo $form->error($model,'del_flg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageslidecol'); ?>
		<?php echo $form->textField($model,'imageslidecol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'imageslidecol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->