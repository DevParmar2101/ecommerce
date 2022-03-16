<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-register-area mt-100 pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Login</h3>
                    <div class="login-register-form">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <div class="sin-login-register">
                                <label>Username or email address <span>*</span></label>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                            </div>
                            <div class="sin-login-register">
                                <label>Password <span>*</span></label>
                                <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                            </div>

                        <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <?= Html::submitButton('Log in', ['name' => 'login-button']) ?>
                                </div>
                            <div class="login-register-remember">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                            </div>
                        <div style="color:#999;margin:1em 0">
                            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                            <br>
                            Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
