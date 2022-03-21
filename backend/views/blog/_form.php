<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'blog_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'content')->widget(\dosamigos\ckeditor\CKEditor::class,[
            'options' => ['rows' => 10],
            'preset' => 'advanced',
        ]) ?>

        <?= $form->field($model, 'category_id')->widget(\kartik\select2\Select2::class,[
                'options' => [
                        'placeholder' => 'Select Category...',
                        'multiple'  => false,
                ],
                'pluginOptions' => [
                        'allowClear' => true,
                ],
                'data' => $model->getCategoryID(),
        ]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
