<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'image',
                    'format' => 'raw',
                    'value' => function($model) {
                        return Html::img(Yii::getAlias('@web/uploads/blog/'.$model->image),['class' => 'img-thumbnail','width' => 100, 'height' => 100]);
                    }
                ],
                'blog_name',
                'content:ntext',
                'slug',
                [
                        'attribute' => 'status',
                        'value' => function($model){
                            if ($model->status == \common\models\Blog::ACTIVE){
                                return \common\models\Blog::STATUS_ACTIVE;
                            }else{
                                return \common\models\Blog::STATUS_INACTIVE;
                            }
                        }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
