<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Блоки'=>array('index/id/'.$id),
	'Создать',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Список блоков','url'=>array('index/id/'.$id)),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление блоками', 'url'=>array('admin/id/'.$id)),
);
?>

<?php echo BsHtml::pageHeader('Создать','Блок') ?>

<?php $this->renderPartial('_form', array('model'=>$model, 'sizes'=>$sizes, 'types'=>$types, 'id'=>$id)); ?>