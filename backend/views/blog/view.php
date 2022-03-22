<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */

$this->title = $model->blog_name;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['index'],['class' => 'btn btn-warning btn-flat'])?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'blog_name',
                [
                        'attribute' => 'image',
                        'format' => 'raw',
                        'value' => function($model){
                            return Html::img(Yii::getAlias('@web/uploads/blog/'.$model->image),['class' => 'img-thumbnail','width' => 100,'height' => 100]);
                        }
                ],
                [
                        'attribute' => 'content',
                        'format' => 'raw'
                ],
                [
                        'attribute' => 'category_id',
                        'value' => function($model) {
                            return $model->category->name;
                        }
                ],
                'created_at:datetime',
                [
                        'attribute' => 'status',
                        'value' => function($model) {
                            if ($model->status == \common\models\Blog::ACTIVE){
                                return \common\models\Blog::STATUS_ACTIVE;
                            }else{
                                return \common\models\Blog::STATUS_INACTIVE;
                            }
                        }
                ],
            ],
        ]) ?>
    </div>
</div>
