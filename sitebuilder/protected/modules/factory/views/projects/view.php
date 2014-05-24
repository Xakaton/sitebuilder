<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>

<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Projects', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Projects', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Projects', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Projects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Projects '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'userid',
		'description',
		'date',
	),
)); ?>