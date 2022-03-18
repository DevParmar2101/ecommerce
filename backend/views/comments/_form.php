<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'comment_by')->textInput() ?>

        <?= $form->field($model, 'blog_id')->textInput() ?>

        <?= $form->field($model, 'created_at')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
