<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IndexContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Index Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-content-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Index Content', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
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
                'banner_title',
                'banner_sub_title',
                'banner_button_title',
                'banner_image',
                // 'section_one_title',
                // 'section_two_title',
                // 'section_three_title',
                // 'section_content_one_id',
                // 'section_content_two_id',
                // 'section_content_three_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
