<?php

use yii\helpers\Html;
?>

<?= $this->render('partial/_breadcrumb')?>

<!-- Blog start -->
<div class="blog-area-2 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?= $this->render('partial/_blogs')?>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-widget mt-60 mb-55">
                    <h4 class="pro-sidebar-title2">Categories </h4>
                    <div class="sidebar-widget-list mt-40">
                        <ul>
                            <li><a href="#">Cafe</a> <span>(3)</span></li>
                            <li><a href="#">Finance</a> <span>(2)</span></li>
                            <li><a href="#">Life Style</a> <span>(6)</span></li>
                            <li><a href="#">Photography</a> <span>(2)</span></li>
                            <li><a href="#">Story love</a> <span>(2)</span></li>
                            <li><a href="#">Technology</a> <span>(16)</span></li>
                            <li><a href="#">Trends</a> <span>(1)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-widget mb-60">
                    <h4 class="pro-sidebar-title2">Popular Post </h4>
                    <div class="sidebar-post-wrap mt-45">
                        <div class="single-sidebar-post">
                            <div class="sidebar-post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-sidebar-1.jpg" alt=""></a>
                            </div>
                            <div class="sidebar-post-content">
                                <h4><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h4>
                                <span>December 18, 2018</span>
                            </div>
                        </div>
                        <div class="single-sidebar-post">
                            <div class="sidebar-post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-sidebar-2.jpg" alt=""></a>
                            </div>
                            <div class="sidebar-post-content">
                                <h4><a href="blog-details.html">Toner Cartridge Quality 20</a></h4>
                                <span>December 18, 2018</span>
                            </div>
                        </div>
                        <div class="single-sidebar-post">
                            <div class="sidebar-post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-sidebar-3.jpg" alt=""></a>
                            </div>
                            <div class="sidebar-post-content">
                                <h4><a href="blog-details.html">Get For Fall Leaf Viewing Trips</a></h4>
                                <span>December 18, 2018</span>
                            </div>
                        </div>
                        <div class="single-sidebar-post">
                            <div class="sidebar-post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-sidebar-4.jpg" alt=""></a>
                            </div>
                            <div class="sidebar-post-content">
                                <h4><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h4>
                                <span>December 18, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget mb-60">
                    <h4 class="pro-sidebar-title2">Archives </h4>
                    <div class="archives-wrap mt-40">
                        <select>
                            <option>Select Month</option>
                            <option> January 2020 </option>
                            <option> December 2018 </option>
                            <option> November 2018 </option>
                        </select>
                    </div>
                </div>
                <div class="sidebar-widget mb-50">
                    <h4 class="pro-sidebar-title2">Tags</h4>
                    <div class="sidebar-widget-tag mt-35">
                        <ul>
                            <li><a href="#">Beauty,</a></li>
                            <li><a href="#">Computer,</a></li>
                            <li><a href="#">Design,</a></li>
                            <li><a href="#">Fashion,</a></li>
                            <li><a href="#">Furniture,</a></li>
                            <li><a href="#">Life Style,</a></li>
                            <li><a href="#">Motion Design,</a></li>
                            <li><a href="#">Photography,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Travel.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <div class="banner-sidebar-banner">
                        <a href="#"><img alt="" src="assets/images/blog/banner-blog.jpg"></a>
                        <div class="banner-sidebar-content">
                            <h3>Ad Banner </h3>
                            <h5>info@la-studioweb.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-pagination-style pagination-mrg">
            <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><span>…</span></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Blog end -->
