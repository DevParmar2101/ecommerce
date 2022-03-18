<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\IndexContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'banner_title') ?>

    <?= $form->field($model, 'banner_sub_title') ?>

    <?= $form->field($model, 'banner_button_title') ?>

    <?= $form->field($model, 'banner_image') ?>

    <?php // echo $form->field($model, 'section_one_title') ?>

    <?php // echo $form->field($model, 'section_two_title') ?>

    <?php // echo $form->field($model, 'section_three_title') ?>

    <?php // echo $form->field($model, 'section_content_one_id') ?>

    <?php // echo $form->field($model, 'section_content_two_id') ?>

    <?php // echo $form->field($model, 'section_content_three_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
