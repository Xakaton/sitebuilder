<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
Создайте новый сайт прямо сейчас! <a href="<?php Yii::app()->theme->baseUrl; ?>/factory/projects/">Создать сайт</a>.
</p>