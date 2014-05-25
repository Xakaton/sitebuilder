<?php
/* @var $this BlocksController */
/* @var $model Blocks */
?>

<?php
$this->breadcrumbs=array(
	'Блок'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Список Блоков', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Создать блок', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'Просмотр Блока', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Управление Блоками', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Изменить','Блок '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>