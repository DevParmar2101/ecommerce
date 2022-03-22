<?php

use yii\helpers\Html;

/* @var $model \common\models\Blog*/
$user = \common\models\User::findOne(['id' => $model->created_by]);
?>
<div class="blog-wrap-3 mb-70">
    <div class="blog-img-3 mb-20">
        <a href="#">
            <?= Html::img(Yii::$app->urlManager->createAbsoluteUrl(['admin/uploads/blog/'.$model->image]))?>
        </a>
    </div>
    <div class="blog-content-3">
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
        <p><?= mb_substr($model->content,0,450, mb_detect_encoding($model->content))."." ?></p>
        <div class="blog-btn-2 blog-btn-2-red">
            <?= Html::a('Read More',['blog/blog-inner/'.$model->slug])?>
        </div>
    </div>
</div>


