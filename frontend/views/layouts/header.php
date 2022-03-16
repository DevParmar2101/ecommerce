<?php

use yii\helpers\Html;
?>
<header class="header-area transparent-bar section-padding-1 bg-black-2">
    <div class="header-bottom background-rgb-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo logo-width">
                        <a href="<?= Yii::$app->homeUrl?>" class="logo-text">
                            CAR RENTAL
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-flex justify-content-end position-static">
                    <div class="main-menu menu-lh-1 main-menu-white main-menu-padding-1 menu-fw-400">
                        <nav>
                            <ul>
                                <li class="position-static"><a class="active" href="#">Home </a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute('site/faq')?>">Faq</a></li>
                                <?php if (Yii::$app->user->isGuest) {?>
                                <li><a href="<?= \yii\helpers\Url::toRoute('site/signup')?>">Signup</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute('site/login')?>">Login</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header-small-mobile section-padding-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="mobile-logo logo-width">
                    <a href="<?= Yii::$app->homeUrl?>" class="logo-text-dark">
                        CAR RENTAL
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="mobile-header-right-wrap">
                    <div class="header-right-wrap header-right-flex">
                        <div class="same-style cart-wrap">
                            <a href="#" class="cart-active">
                                <i class="dlicon shopping_bag-20"></i>
                                <span class="count-style">02</span>
                            </a>
                        </div>
                        <div class="same-style header-off-canvas">
                            <a class="header-aside-button" href="#">
                                <i class="dlicon ui-3_menu-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
