<?php
/* @var $this BlocksController */
/* @var $model Blocks */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'id'); ?>
    <?php echo $form->textFieldControlGroup($model,'pid'); ?>
    <?php echo $form->textFieldControlGroup($model,'name',array('maxlength'=>50)); ?>
    <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'size'); ?>
    <?php echo $form->textFieldControlGroup($model,'sort'); ?>
    <?php echo $form->textFieldControlGroup($model,'type'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
