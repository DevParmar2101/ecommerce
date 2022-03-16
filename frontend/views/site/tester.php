<?php

use yii\helpers\Html;
?>


<div class="login-register-area mt-100 pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Login</h3>
                    <div class="login-register-form">
                        <form action="#">
                            <div class="sin-login-register">
                                <label>Username or email address <span>*</span></label>
                                <input type="text" name="user-name">
                            </div>
                            <div class="sin-login-register">
                                <label>Password <span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <button type="submit">Log in</button>
                                </div>
                                <div class="login-register-remember">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <a href="#">Lost your password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
