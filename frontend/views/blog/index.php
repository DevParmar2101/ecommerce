<?php

use yii\helpers\Html;
?>
<!-- Breadcrumb is Start -->
<?= $this->render('partial/_breadcrumb')?>
<!-- Breadcrumb end -->

<!-- Blog start -->
<div class="blog-area-2 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Blog Section is Start -->
                <?= $this->render('partial/_blogs')?>
                <!-- Blog Section is End -->
            </div>
            <div class="col-lg-3">
                <!-- Blog Sidebar is Start -->
                <?= $this->render('partial/_blog_sidebar')?>
                <!-- Blog Sidebar is End -->
                <div class="sidebar-widget mb-60">
                    <h4 class="pro-sidebar-title2">Popular Post </h4>
                    <div class="sidebar-post-wrap mt-45">
                        <!-- Popular Post is Start -->
                        <?= $this->render('partial/_popular_post')?>
                        <!-- Popular Post is End -->
                    </div>
                </div
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->
