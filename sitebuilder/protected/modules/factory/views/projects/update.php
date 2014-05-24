<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>

<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Projects', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Projects', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Projects', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Projects '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>