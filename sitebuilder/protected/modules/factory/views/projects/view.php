<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>

<?php
$this->breadcrumbs=array(
	'Сайты'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Список сайтов', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Создать сайт', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Изменить сайт', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Удалить сайт', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление сайтами', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Просмотр','Сайты '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'date',
	),
)); ?>
<?php $this->widget('zii.widgets.TbButton', array(
    'label'=>'Добавить блок',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>array('/blocks/create'),
)); ?>
<?php echo BsHtml::pageHeader('Блоки') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
    'dataProvider'=>$blocks,
    'itemView'=>'_view',
)); ?>