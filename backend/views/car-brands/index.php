<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CarBrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brands-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Car Brands', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
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
                    'attribute' => 'brand_logo',
                    'format' => 'raw',
                    'value' => function($model) {
                        return Html::img(Yii::getAlias('@web/uploads/car-brands/'.$model->brand_logo),['class' => 'img-thumbnail','width' => 100,'height' => 100]);
                    }
                ],
                'brand_name',
                [
                    'attribute' => 'status',
                    'value' => function($model) {
                        if ($model->status == \common\models\CarBrands::ACTIVE){
                            return \common\models\CarBrands::STATUS_ACTIVE;
                        }else{
                            return \common\models\CarBrands::STATUS_INACTIVE;
                        }
                    }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
