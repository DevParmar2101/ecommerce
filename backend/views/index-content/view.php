<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\IndexContent */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Index Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-content-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'banner_title',
                'banner_sub_title',
                'banner_button_title',
                'banner_image',
                'section_one_title',
                'section_two_title',
                'section_three_title',
                'section_content_one_id',
                'section_content_two_id',
                'section_content_three_id',
            ],
        ]) ?>
    </div>
</div>
