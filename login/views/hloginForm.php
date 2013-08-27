<?php
/* @var $this LoginController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<div class="form header">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
		'validateOnChange' => false,
	),
)); ?>

<table>
	<tr> 
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username',array('class'=>'txt')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
			<div class="row rememberMe">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe',array('class'=>'dull')); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</td>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password',array('class'=>'txt')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'Forget Password?',array('class'=>'dull')); ?>
			</div>
		</td>
		<td>
			<div class="row"> &nbsp; </div>
			<div class="row">
				<?php echo CHtml::submitButton('Login',array('class'=>'logbtn')); ?>
			</div>
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>
</div><!-- form -->
