<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SectionContent */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="section-content-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'page_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<iframe src="<?= Yii::$app->urlManager->createAbsoluteUrl(['/site/partial/_car_area'])?>" width="100%" height="500" class="border-0"></iframe>