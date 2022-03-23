<?php

use yii\helpers\Html;

$this->title = 'Blog Inner';
/* @var $model \common\models\Blog*/
?>
<div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-2">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Blog</h2>
            </div>
            <ul>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li><span> > </span></li>
                <li class="active"> <?= $model->slug?> </li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area-2 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-wrap-3 mb-70">
                    <div class="blog-img-3 mb-20">
                        <a href="#">
                            <?= Html::img(Yii::$app->urlManager->createAbsoluteUrl('admin/uploads/blog/'.$model->image))?>
                        </a>
                    </div>
                    <div class="blog-content-3 ml-150">
                        <div class="blog-category">
                            <a href="#"><?= $model->category->name?></a>
                        </div>
                        <h3><a href="#"><?= $model->blog_name?></a></h3>
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">Posted on <?= Yii::$app->formatter->asDate($model->created_at)?></a></li>
                                <li>By <a href="#"><?= $model->createdBy->username?></a></li>
                            </ul>
                        </div>
                        <?= $model->content?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

