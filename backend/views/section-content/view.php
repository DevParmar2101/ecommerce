<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SectionContent */

$this->title = $model->page_name;
$this->params['breadcrumbs'][] = ['label' => 'Section Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-content-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['section-content/index'],['class' => 'btn btn-warning btn-flat'])?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'page_name',
                'slug',
                [
                        'attribute' => 'status',
                        'value'=> function($model){
                            if ($model->status == \common\models\SectionContent::ACTIVE) {
                                return \common\models\SectionContent::STATUS_ACTIVE;
                            }else{
                                return \common\models\SectionContent::STATUS_INACTIVE;
                            }
                        }
                ],
            ],
        ]) ?>
    </div>
</div>
