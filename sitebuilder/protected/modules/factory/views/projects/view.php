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

<?php echo BsHtml::pageHeader('Просмотр','Сайт '.$model->name) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'description',
		'date',
	),
)); ?>
<?php echo CHTML::link('Добавить блок','../blocks/create/id/'.$model->id); ?>
<?php echo BsHtml::pageHeader('Блоки') ?>
<?php if (isset($blocks)) {
        $this->widget('bootstrap.widgets.BsListView',array(
        'dataProvider'=>$blocks,
        'itemView'=>'../blocks/_view',
     ));
} else echo 'Для проекта не создано ни одного блока'; ?>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/landing/id/<?php echo $model->id; ?>"><?php echo TbHtml::button('Собрать сайт',
    array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE)); ?></a>
