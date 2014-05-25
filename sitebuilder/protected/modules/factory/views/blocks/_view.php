<?php
/* @var $this BlocksController */
/* @var $data Blocks */
?>

<div class="view">

	<b><a href="view?id=<?php echo $data->id;?>"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?></a>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

</div>