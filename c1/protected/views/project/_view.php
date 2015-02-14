<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_user')); ?>:</b>
	<?php echo CHtml::encode($data->project_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_type')); ?>:</b>
	<?php echo CHtml::encode($data->project_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_industry')); ?>:</b>
	<?php echo CHtml::encode($data->project_industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_business_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_business_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_details')); ?>:</b>
	<?php echo CHtml::encode($data->project_details); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('project_intensity')); ?>:</b>
	<?php echo CHtml::encode($data->project_intensity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	*/ ?>

</div>