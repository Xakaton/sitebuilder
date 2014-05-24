<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>

<?php
$this->breadcrumbs=array(
	'Сайты'=>array('index'),
	'Создать',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Список сайтов', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление сайтами', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Создание','Сайты') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>