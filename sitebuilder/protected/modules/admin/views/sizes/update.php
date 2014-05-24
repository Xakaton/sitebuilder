<?php
/* @var $this SizesController */
/* @var $model Sizes */
?>

<?php
$this->breadcrumbs=array(
	'Sizes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Sizes', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Sizes', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Sizes', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Sizes', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Sizes '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>