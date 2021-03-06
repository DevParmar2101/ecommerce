<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blog Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-category-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Blog Category', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                [
                        'attribute' => 'status',
                        'value' => function($model){
                            if ($model->status == \common\models\BlogCategory::ACTIVE){
                                return \common\models\BlogCategory::STATUS_ACTIVE;
                            }else{
                                return \common\models\BlogCategory::STATUS_INACTIVE;
                            }
                        }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
