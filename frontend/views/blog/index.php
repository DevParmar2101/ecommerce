<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $dataProvider \yii\data\ActiveDataProvider*/

$this->title = 'Blog Index';

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
                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{pager}\n{items}\n{summary}",
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('partial/_blogs',['model' => $model]);

                        // or just do some echo
                        // return $model->title . ' posted by ' . $model->author;
                    },
                ]);
                ?>
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
