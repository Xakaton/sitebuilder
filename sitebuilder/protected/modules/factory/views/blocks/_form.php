<?php
/* @var $this BlocksController */
/* @var $model Blocks */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'blocks-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'pid'); ?>
    <?php echo $form->textFieldControlGroup($model,'name',array('maxlength'=>50)); ?>
    <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'size'); ?>
    <?php echo $form->textFieldControlGroup($model,'sort'); ?>
    <?php echo $form->textFieldControlGroup($model,'type'); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
