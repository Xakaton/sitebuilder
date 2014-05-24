<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blocks', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blocks', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Blocks', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Blocks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Blocks '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'name',
		'content',
		'size',
		'sort',
		'type',
	),
)); ?>