<?php
/* @var $this LoginController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<div class="wide form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('placeholder'=>'User Name','required')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe',array('class'=>'remember')); ?>
		<?php echo $form->label($model,'rememberMe',array('class'=>'remember-label')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array('class'=>'logbtn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
