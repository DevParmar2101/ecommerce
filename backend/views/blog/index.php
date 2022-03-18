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

                'id',
                'blog_name',
                'content:ntext',
                'category_id',
                'created_at',
                // 'created_by',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>