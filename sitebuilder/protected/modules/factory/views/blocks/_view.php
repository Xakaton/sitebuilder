<?php
/* @var $this BlocksController */
/* @var $data Blocks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/factory/blocks/view?id=<?php echo $data->id;?>"><?php echo CHtml::encode($data->name); ?></a>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

</div>