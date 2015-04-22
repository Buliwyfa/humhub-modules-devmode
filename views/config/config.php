
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('devmode.base', 'Development Mode Module Configuration'); ?></div>
    <div class="panel-body">


        <p><?php echo Yii::t('devmode.base', 'Activating development will prevent guests and members from accessing the system.'); ?></p>
        <br/>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'dev-mode-configure-form',
            'enableAjaxValidation' => false,
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>
		
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'devMode'); ?> <?php echo $model->getAttributeLabel('devMode'); ?>
                </label>
            </div>
		</div>

        <hr>
        <?php echo CHtml::submitButton(Yii::t('devmode.base', 'Save'), array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default" href="<?php echo $this->createUrl('//admin/module'); ?>"><?php echo Yii::t('devmode.base', 'Back to modules'); ?></a>

        <?php $this->endWidget(); ?>
    </div>
</div>