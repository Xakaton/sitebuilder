<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blocks', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blocks', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Blocks', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Blocks '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>