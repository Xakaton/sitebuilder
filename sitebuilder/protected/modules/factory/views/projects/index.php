<?php
/* @var $this ProjectsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Сайты',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Создать сайт', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление сайтами', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Сайты') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>