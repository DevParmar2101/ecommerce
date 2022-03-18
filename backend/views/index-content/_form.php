<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\IndexContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-content-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'banner_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'banner_sub_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'banner_button_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'banner_image')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'section_one_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'section_two_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'section_three_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'section_content_one_id')->textInput() ?>

        <?= $form->field($model, 'section_content_two_id')->textInput() ?>

        <?= $form->field($model, 'section_content_three_id')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
