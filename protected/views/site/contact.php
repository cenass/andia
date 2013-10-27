 <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>



<div class="contact-us container">
    <div class="contact-address">
            <?php echo $shirtDesc; ?>             
    </div>  
    <div class="row">
<?php $form=$this->beginWidget('CActiveForm', array(
	'htmlOptions'=>array('class'=>'contact-form span7'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
        	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>

		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>

		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
        
                <div>
		<?php echo CHtml::submitButton('Send',array('class'=>'send')); ?>
                </div>
    <?php $this->endWidget(); ?>
                    
</div><!-- form -->
</div>
<?php endif; ?>