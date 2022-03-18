<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CarBrands */

$this->title = 'Create Car Brands';
$this->params['breadcrumbs'][] = ['label' => 'Car Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brands-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
