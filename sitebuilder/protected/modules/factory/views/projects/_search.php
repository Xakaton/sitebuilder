<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'id'); ?>
    <?php echo $form->textFieldControlGroup($model,'name',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'userid'); ?>
    <?php echo $form->textFieldControlGroup($model,'description',array('maxlength'=>255)); ?>
    <?php echo $form->textFieldControlGroup($model,'date'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
