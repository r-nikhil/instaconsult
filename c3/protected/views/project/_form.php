<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_user'); ?>
		<?php echo $form->textField($model,'project_user',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_type'); ?>
		<?php echo $form->textField($model,'project_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_industry'); ?>
		<?php echo $form->textField($model,'project_industry',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_business_name'); ?>
		<?php echo $form->textField($model,'project_business_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_business_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_details'); ?>
		<?php echo $form->textField($model,'project_details',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_intensity'); ?>
		<?php echo $form->textField($model,'project_intensity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_intensity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->