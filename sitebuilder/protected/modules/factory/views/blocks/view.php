<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Блоки'=>array('index/id/'.$model->pid),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Список Блоков', 'url'=>array('index/id/'.$model->pid)),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Создать Блок', 'url'=>array('create/id/'.$model->pid)),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Изменить Блок', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Удалить Блок', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление Блоками', 'url'=>array('admin', 'id'=>$model->pid)),
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