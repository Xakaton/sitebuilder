<?php
/* @var $this MenuController */
/* @var $model Menu */
?>

<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Menu', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Menu') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>