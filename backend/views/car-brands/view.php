<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CarBrands */

$this->title = $model->brand_name;
$this->params['breadcrumbs'][] = ['label' => 'Car Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brands-view box box-primary">
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
                'brand_name',
                'brand_slug',
                [
                        'attribute' => 'brand_logo',
                        'format' => 'raw',
                        'value' => Html::img(Yii::getAlias('@web/uploads/car-brands/'.$model->brand_logo),['class' => 'img-thumbnail','width' => 200,'height' => 475]),
                ],
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
                'created_at:datetime',
            ],
        ]) ?>
    </div>
</div>
