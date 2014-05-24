<?php
/* @var $this SizesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sizes',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Sizes', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Sizes', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Sizes') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>