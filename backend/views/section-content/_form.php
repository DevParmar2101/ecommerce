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
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<?php if (Yii::$app->controller->id == 'section-content' && Yii::$app->controller->action == 'update') {?>
<div class="justify-content-center">
    <iframe src="<?= Yii::$app->urlManagerFrontend->createAbsoluteUrl(['ecommerce/site/car-area'])?>" width="100%" height="550" class="border-0"></iframe>
</div>
<?php }?>