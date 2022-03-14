<?php

use yii\helpers\Html;
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
                        <div class="shop-top-bar-left">
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>
                            <div class="shop-page-list">
                                <ul>
                                    <li>Show</li>
                                    <li class="active"><a href="#">12</a></li>
                                    <li><a href="#">15</a></li>
                                    <li><a href="#">30</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-top-bar-right">
                            <div class="shop-tab nav">
                                <a href="#shop-1" class="active" data-toggle="tab"><i class="dlicon ui-2_grid-45"></i></a>
                                <a href="#shop-2" data-toggle="tab"><i class="dlicon design_bullet-list-69"></i></a>
                            </div>
                            <div class="shop-filter ml-50">
                                <a class="shop-filter-active" href="#">Filters <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></a>
                            </div>
                            <div class="shop-short-by ml-50">
                                <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
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
                    <div class="tab-content jump-3 pt-30">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-3.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-3-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$28.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-4.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-4-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">News strappy sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$26.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-1.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-1-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$39.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-5.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-5-2.jpg" alt="">
                                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                            <div class="product-price">
                                                <span class="old-price">$80.00</span>
                                                <span class="new-price">$55.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-6.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-6-2.jpg" alt="">
                                                <span class="badge-black badge-right-0 badge-top-0 badge-width-height-1">sold uot</span>
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$49.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-7.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-7-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$55.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-8.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-8-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$75.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-9.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-9-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Strappy sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$70.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-16.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-16-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$28.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-15.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-15-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">News strappy sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$26.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-14.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-14-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$39.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-13.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-13-2.jpg" alt="">
                                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                            <div class="product-price">
                                                <span class="old-price">$80.00</span>
                                                <span class="new-price">$55.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-12.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-12-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$49.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-11.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-11-2.jpg" alt="">
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$55.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img default-overlay mb-25">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/product-13.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/product-13-2.jpg" alt="">
                                                <span class="badge-white badge-text-black badge-left-20 badge-top-20 badge-width-height-1">12 Sold/31</span>
                                            </a>
                                            <div class="product-action product-action-position-1">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 title-font-width-400 text-center">
                                            <h3><a href="product-details.html">News strappy sandals</a></h3>
                                            <div class="product-price">
                                                <span class="new-price">$26.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-8.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-8-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Checked Knit Jumpsuit</a></h3>
                                            <div class="pro-list-price">
                                                <span>$50.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-1.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-1-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Contrast Faux Fur Jacket</a></h3>
                                            <div class="pro-list-price">
                                                <span>$80.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-2.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-2-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Sleeve Button Cowl Neck</a></h3>
                                            <div class="pro-list-price">
                                                <span>$50.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-3.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-3-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Cable – knit sweater</a></h3>
                                            <div class="pro-list-price">
                                                <span>$70.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-7.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-7-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Cable – knit sweater</a></h3>
                                            <div class="pro-list-price">
                                                <span>$70.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-70">
                                <div class="row">
                                    <div class="custom-col-32-shop">
                                        <div class="product-wrap">
                                            <div class="product-img default-overlay">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-10.jpg" alt="">
                                                    <img class="hover-img" src="assets/images/product/product-10-2.jpg" alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-68-shop">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Cable – knit sweater</a></h3>
                                            <div class="pro-list-price">
                                                <span>$90.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <div class="pro-list-actioncart">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                                <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-pagination-style text-center">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar-style mt-25">
                    <div class="sidebar-widget mb-65">
                        <h4 class="pro-sidebar-title">Categories </h4>
                        <div class="sidebar-widget-list mt-50">
                            <ul>
                                <li><a href="#">Electronics & Tech</a> <span>(16)</span></li>
                                <li><a href="#">Electronics sale</a> <span>(13)</span></li>
                                <li><a href="#">Electronics sale off</a> <span>(39)</span></li>
                                <li><a href="#">Fashion sale off</a> <span>(16)</span></li>
                                <li><a href="#">Fashions</a> <span>(15)</span></li>
                                <li><a href="#">Furnitur new arrival</a> <span>(18)</span></li>
                                <li><a href="#">Furniture</a> <span>(10)</span></li>
                                <li><a href="#">Main</a> <span>(19)</span></li>
                                <li><a href="#">Shoes</a> <span>(12)</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-70">
                        <h4 class="pro-sidebar-title">Filter by price </h4>
                        <div class="price-filter mt-60">
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <span>Price: </span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-60">
                        <h4 class="pro-sidebar-title">Size</h4>
                        <div class="sidebar-widget-size mt-45">
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
                    <div class="sidebar-widget mb-45">
                        <h4 class="pro-sidebar-title">Color</h4>
                        <div class="sidebar-widget-color mt-40">
                            <ul>
                                <li><a href="#">Blue <span>(8)</span></a></li>
                                <li><a href="#">Brown <span>(8)</span></a></li>
                                <li><a href="#">Green <span>(7)</span></a></li>
                                <li><a href="#">Pink <span>(7)</span></a></li>
                                <li><a href="#">Violet <span>(8)</span></a></li>
                                <li><a href="#">White <span>(8)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-60">
                        <h4 class="pro-sidebar-title">Tags</h4>
                        <div class="sidebar-widget-tag mt-45">
                            <ul>
                                <li><a href="#">Blazer,</a></li>
                                <li><a href="#">chair,</a></li>
                                <li><a href="#">Coat,</a></li>
                                <li><a href="#">dress,</a></li>
                                <li><a href="#">Electronics & Tech,</a></li>
                                <li><a href="#">fashion,</a></li>
                                <li><a href="#">light,</a></li>
                                <li><a href="#">Living,</a></li>
                                <li><a href="#">Main 01,</a></li>
                                <li><a href="#">Main 02,</a></li>
                                <li><a href="#">Main 02-1,</a></li>
                                <li><a href="#">Main 03,</a></li>
                                <li><a href="#">Sandals,</a></li>
                                <li><a href="#">Tuxedo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="shop-sidebar-banner default-overlay">
                            <a href="#"><img alt="" src="assets/images/banner/sidebar-banner.jpg"></a>
                            <div class="shop-sidebar-content">
                                <h5>Houndstooth coat</h5>
                                <h3>off 25%</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

