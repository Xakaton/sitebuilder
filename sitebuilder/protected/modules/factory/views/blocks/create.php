<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blocks', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Blocks') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>