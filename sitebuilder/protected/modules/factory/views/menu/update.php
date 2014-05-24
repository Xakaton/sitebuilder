<?php
/* @var $this MenuController */
/* @var $model Menu */
?>

<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Menu', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Menu', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Menu', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Menu '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>