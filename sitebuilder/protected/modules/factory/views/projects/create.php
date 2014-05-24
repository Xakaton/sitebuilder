<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>

<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Projects', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Projects') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>