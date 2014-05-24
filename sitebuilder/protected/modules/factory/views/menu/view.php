<?php
/* @var $this MenuController */
/* @var $model Menu */
?>

<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Menu', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Menu', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Menu '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'blockid',
		'sort',
	),
)); ?>