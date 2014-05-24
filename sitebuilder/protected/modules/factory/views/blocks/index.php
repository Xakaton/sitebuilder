<?php
/* @var $this BlocksController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Blocks',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blocks', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Blocks') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>