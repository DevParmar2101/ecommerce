<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IndexContent */

$this->title = 'Update Index Content: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Index Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="index-content-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
