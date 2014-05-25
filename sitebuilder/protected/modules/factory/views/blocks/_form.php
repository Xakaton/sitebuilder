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

    <p class="help-block">Поля помеченные<span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->hiddenField($model,'pid',array('type'=>'hidden', 'value'=>$model->pid)); ?>
    <?php echo $form->textFieldControlGroup($model,'name',array('maxlength'=>50)); ?>
    <?php $this->widget('application.extensions.tinymce.ETinyMce', array('name'=>'content')); ?>
    <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'sort'); ?>
    <?php echo BsHtml::submitButton('Сохранить', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
