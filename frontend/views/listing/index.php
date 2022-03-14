<?php

use yii\helpers\Html;

$this->title = 'Listing Page';
?>

<div class="breadcrumb-area section-padding-1 breadcrumb-bg-1 breadcrumb-ptb-2">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Shop Sidebar</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home 01 </a>
                </li>
                <li><span> &gt; </span></li>
                <li class="active"> shop </li>
            </ul>
        </div>
    </div>
</div>

<div class="shop-area section-padding-3 pt-70 pb-100">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shhop-pl-35">
                    <div class="shop-top-bar">
                        <div class="shop-top-bar-right text-left">
                            <div class="shop-filter ml-50">
                                <a class="shop-filter-active btn btn-secondary" href="#">Filters <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></a>
                            </div>
                            <div class="shop-short-by ml-50">
                                <span class="btn btn-secondary">Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                                <ul>
                                    <li class="active"><a href="#">Default sorting</a></li>
                                    <li><a href="#">Sort by popularity</a></li>
                                    <li><a href="#">Sort by average rating</a></li>
                                    <li><a href="#">Sort by latest</a></li>
                                    <li><a href="#">Sort by price: low to high</a></li>
                                    <li><a href="#">Sort by price: high to low</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-filter-wrapper">
                        <div class="row">
                            <!-- Product Filter -->
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                <div class="product-filter">
                                    <h5>Price</h5>
                                    <div class="price-filter">
                                        <ul>
                                            <li><a href="#">$0.00 - $20.00</a></li>
                                            <li><a href="#">$20.00 - $40.00</a></li>
                                            <li><a href="#">$30.00 - $50.00</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                <div class="product-filter">
                                    <h5>Size</h5>
                                    <div class="product-size">
                                        <ul>
                                            <li><a href="#">Full Size</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                <div class="product-filter">
                                    <h5>Color</h5>
                                    <div class="product-color">
                                        <ul>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#"> Pink</a></li>
                                            <li><a href="#">Violet</a></li>
                                            <li><a href="#"> White</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                <div class="product-filter">
                                    <h5>Brands</h5>
                                    <div class="product-brands">
                                        <ul>
                                            <li><a href="#">Airi</a></li>
                                            <li><a href="#">Draven</a></li>
                                            <li><a href="#">Mango</a></li>
                                            <li><a href="#"> Valentino</a></li>
                                            <li><a href="#">Zara </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->render('partial/content')?>
                </div>
            </div>
            <?= $this->render('partial/_sidebar_categories')?>
        </div>
    </div>
</div>

