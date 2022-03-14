<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="error-area bg-gray-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-content text-center">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <h3><?= nl2br(Html::encode($message)) ?></h3>
                    <p>It looks like nothing was found on this search!</p>
                    <div class="btn-style-1 text-center">
                        <a class="btn-border-black2" href="<?= Yii::$app->homeUrl?>">
                            <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-bg-transparent btn-viewmore-common btn-font-3">
                                <span>Back to home</span>
                            </div>
                            <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-hover-transition btn-font-3">
                                <span>Back to home</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>