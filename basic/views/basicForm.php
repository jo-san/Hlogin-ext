<?php
/* @var $this LoginController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sidebar_loginForm',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
		'validateOnChange' => false,
	),
)); ?>

	<div class="row">
		<?php echo $form->textField($model,'username',array('placeholder'=>'User Name')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array('class'=>'logbtn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->