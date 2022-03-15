<?php

use yii\helpers\Html;
?>

<div class="description-review-area section-padding-7 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                        <a data-toggle="tab" href="#des-details2">Additional information</a>
                        <a data-toggle="tab" href="#des-details3">Reviews (1)</a>
                        <a data-toggle="tab" href="#des-details4"> Brands</a>
                        <a data-toggle="tab" href="#des-details5">Shipping & Delivery</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <div class="row">
                                    <div class="product-dec-col-38">
                                        <div class="pro-details-banner">
                                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><img src="<?= Yii::getAlias('@web/images/product-details/pro-details-banner.jpg')?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="product-dec-col-62">
                                        <div class="product-dec-content">
                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                            <ul>
                                                <li>Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper</li>
                                                <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                            </ul>
                                            <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra,.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="additional-info">
                                <ul>
                                    <li><span>Size</span>L, S, XL, XXL</li>
                                    <li><span>Brands</span>Airi, Draven, Mango, Valentino, Zara</li>
                                    <li><span>Color</span> Blue, Brown, Green, Pink, Violet, White</li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane ">
                            <div class="review-wrapper">
                                <h2>1 review for Sleeve Button Cowl Neck</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <?= Html::img('@web/images/product-details/client-1.jpg')?>
<!--                                        <img src="assets/images/product-details/client-1.jpg" alt="">-->
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>John Snow</span> - March 14, 2020</h5>
                                            </div>
                                            <div class="review-rating">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class=" fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="star-box-wrap">
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane ">
                            <div class="pro-dec-brand-wrap">
                                <div class="row">
                                    <div class="ml-auto mr-auto col-lg-10">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 col-sm-5">
                                                <div class="pro-dec-brand-img text-center">
                                                    <?= Html::img('@web/images/brand-logo/brand-logo-7.png')?>
<!--                                                    <img src="assets/images/brand-logo/brand-logo-7.png" alt="">-->
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-7">
                                                <div class="pro-dec-brand-content">
                                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details5" class="tab-pane">
                            <div class="about-shiping-content">
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

