<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SectionContent */

$this->title = 'Update Section Content: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Section Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section-content-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
