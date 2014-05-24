<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'projects-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'name',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'userid'); ?>
    <?php echo $form->textFieldControlGroup($model,'description',array('maxlength'=>255)); ?>
    <?php echo $form->textFieldControlGroup($model,'date'); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
