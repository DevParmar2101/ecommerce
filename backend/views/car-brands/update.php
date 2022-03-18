<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CarBrands */

$this->title = 'Update Car Brands: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Car Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-brands-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
