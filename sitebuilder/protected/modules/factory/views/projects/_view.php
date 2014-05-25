<?php
/* @var $this ProjectsController */
/* @var $data Projects */
?>

<div class="view">

	<b><a href="view?id=<?php echo $data->id;?>"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?></a>a>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />
</div>