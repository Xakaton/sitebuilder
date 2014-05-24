<?php
/* @var $this BlockTypeController */
/* @var $model BlockType */
?>

<?php
$this->breadcrumbs=array(
	'Block Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BlockType', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create BlockType', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View BlockType', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BlockType', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','BlockType '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>