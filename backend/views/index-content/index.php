<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\IndexContent */

$this->title = 'Create Index Content';
$this->params['breadcrumbs'][] = ['label' => 'Index Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-content-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
