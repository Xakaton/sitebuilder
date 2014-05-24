<?php
/* @var $this BlockTypeController */
/* @var $model BlockType */
?>

<?php
$this->breadcrumbs=array(
	'Block Types'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BlockType', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BlockType', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','BlockType') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>