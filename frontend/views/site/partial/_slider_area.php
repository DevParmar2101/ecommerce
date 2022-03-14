<?php

use yii\helpers\Html;
?>

<div class="slider-area">
    <div class="container-fluid p-0">
        <div class="main-slider-active owl-carousel slider-dot-position-2 slider-dot-style-1 slider-img-width-hm3">
            <div class="single-main-slider slider-animated-1 bg-img slider-height-hm3 align-items-center custom-d-flex res-white-overly-xs" data-dot="01" style="background-image:url(frontend/web/images/slider/slider-hm3-1.jpg);">
                <div class="row g-0 width-100-percent">
                    <div class="col-lg-6 col-md-8">
                        <div class="main-slider-content-3-1 text-center slider-hm3-content-3-1">
                            <span class="animated">NEW COLLECTIONS 2020 </span>
                            <h1 class="animated">DOUBLE-BREASTED HERRINGBONE <br>BLAZER </h1>
                            <h5 class="animated">$89.99 </h5>
                            <div class="slider-btn-2">
                                <a class="animated" href="product-details.html">SHOP NOW </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-main-slider slider-animated-1 bg-img slider-height-hm3 align-items-center custom-d-flex" data-dot="02" style="background-image:url(frontend/web/images/slider/slider-hm3-2.jpg);">
                <div class="row g-0 width-100-percent">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-slider-content-3-2 text-center">
                            <?= Html::img('@web/images/slider/slider-hm3-4.png',['class' => 'animated'])?>
                            <!--                                <img class="animated" src="assets/images/slider/slider-hm3-4.png" alt="">-->
                            <div class="slider-btn-2 slider-btn-2-white">
                                <a class="animated" href="product-details.html">SHOP NOW </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-main-slider slider-animated-1 bg-img slider-height-hm3 align-items-center custom-d-flex " data-dot="03" style="background-image:url(frontend/web/images/slider/slider-hm3-3.jpg);">
                <div class="row g-0 width-100-percent">
                    <div class="col-lg-6 col-md-12 ms-auto">
                        <div class="main-slider-content-3-3 text-center">
                            <h3 class="animated">Kids Collections </h3>
                            <h1 class="animated">Off 50% </h1>
                            <div class="slider-btn-2 slider-btn-2-white">
                                <a class="animated" href="product-details.html">SHOP NOW </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-social">
        <ul>
            <li><a href="#">DRIBBLE</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">TWITTER</a></li>
        </ul>
    </div>
</div>