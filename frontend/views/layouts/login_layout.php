<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

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

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="header-small-mobile section-padding-1 shadow">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo logo-width">
                        <a href="<?= Yii::$app->homeUrl?>" class="logo-text-dark">
                            CAR RENTAL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?= $content?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
