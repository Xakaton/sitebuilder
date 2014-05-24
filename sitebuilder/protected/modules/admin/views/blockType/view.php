<?php
/* @var $this BlockTypeController */
/* @var $model BlockType */
?>

<?php
$this->breadcrumbs=array(
	'Block Types'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BlockType', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create BlockType', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update BlockType', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete BlockType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BlockType', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','BlockType '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
		'size',
	),
)); ?>