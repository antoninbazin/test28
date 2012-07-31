<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guest-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->radioButtonList($model, 'gender', array(
        'male'=>'Homme',
        'female'=>'Femme',)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_date'); ?>
		<?php echo $form->textField($model,'arrival_date'); ?>
		<?php echo $form->error($model,'arrival_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stuff'); ?>
		<?php echo $form->dropDownList($model, 'stuff', array('soft'=>'Boissons soft', 'alcool'=>'Alcool', 'sale'=>'Nourriture salé', 'sucre'=>'Nourriture sucré')); ?>
		<?php echo $form->error($model,'stuff'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_party'); ?>
		<?php echo $form->textField($model,'name_party',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name_party'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->