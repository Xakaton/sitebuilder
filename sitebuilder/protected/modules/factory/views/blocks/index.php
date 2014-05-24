<?php
/* @var $this BlocksController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Блоки',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Создать блок', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление блоками', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Блоки') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>