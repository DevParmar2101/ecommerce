<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CarBrands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-brands-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <div class="row-lg">
            <div class="col-md-12">
                <?= $form->field($model, 'brand_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-md-12">
                <?= $form->field($model, 'brand_logo')->widget(\kartik\file\FileInput::class,[
                    'pluginOptions' => [

                        'initialPreview' => Html::img(Yii::getAlias('@web/uploads/index-content/'.$model->brand_logo),['class' => 'img-thumbnail']),
                        'initialPreviewData' => true,
                        'showZoomSettings'=> false,
                        'showPreview' => true,
                        'showCaption' => true,
                        'showRemove' => false,
                        'showUpload' => false,

                    ],
                    'options' => ['accept' => 'image/*'],
                ]) ?>
            </div>
        </div>

        <div class="row-lg">
            <div class="col-md-12">
                <?= $form->field($model, 'status')->widget(\kartik\select2\Select2::class,[
                    'options' => [
                        'placeholder' => 'Select Status...',
                        'multiple' => false
                    ],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                    'data' => $model->getStatus(),
                    ]) ?>
            </div>
        </div>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
