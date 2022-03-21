<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\IndexContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-content-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <div class="row-lg">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?= $form->field($model, 'banner_title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?= $form->field($model, 'banner_sub_title')->widget(CKEditor::className(),[
                    'options' => ['rows' => 10],
                    'preset' => 'basic',

                ]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?= $form->field($model,'banner_image')->widget(FileInput::class,[
                    'pluginOptions' => [
                        'showPreview' => true,
                        'showCaption' => true,
                        'showRemove' => false,
                        'showUpload' => false,
                    ],
                    'options' => ['accept' => 'image/*']
                ])?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?= $form->field($model, 'banner_button_title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_one_title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_two_title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_three_title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_content_one_id')->textInput() ?>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_content_two_id')->textInput() ?>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'section_content_three_id')->textInput() ?>
            </div>
        </div>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
