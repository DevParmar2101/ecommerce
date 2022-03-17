<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-register-area mt-100 pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Signup</h3>
                    <div class="login-register-form">
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                        <div class="sin-login-register">
                            <label>Username<span>*</span></label>
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                        </div>
                        <div class="sin-login-register">
                            <label>Email<span>*</span></label>
                            <?= $form->field($model, 'email')->label(false) ?>
                        </div>
                        <div class="sin-login-register">
                            <label>Password <span>*</span></label>
                            <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                        </div>

                        <div class="login-register-btn-remember">
                            <div class="login-register-btn">
                                <?= Html::submitButton('Signup', ['name' => 'signup-button']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
