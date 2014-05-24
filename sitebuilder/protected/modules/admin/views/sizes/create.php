<?php
/* @var $this SizesController */
/* @var $model Sizes */
?>

<?php
$this->breadcrumbs=array(
	'Sizes'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Sizes', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Sizes', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Sizes') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>