<?php
/* @var $this SizesController */
/* @var $model Sizes */
?>

<?php
$this->breadcrumbs=array(
	'Sizes'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Sizes', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Sizes', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Sizes', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Sizes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Sizes', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Sizes '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'value',
	),
)); ?>