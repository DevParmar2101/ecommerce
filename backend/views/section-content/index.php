<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SectionContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-content-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Section Content', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'page_name',
                'slug',
                [
                        'attribute' => 'status',
                        'value' => function($model) {
                            if ($model->status == \common\models\SectionContent::ACTIVE) {
                                return \common\models\SectionContent::STATUS_ACTIVE;
                            }else{
                                return \common\models\SectionContent::STATUS_INACTIVE;
                            }
                        }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
