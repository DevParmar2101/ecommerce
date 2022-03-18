<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SectionContent */

$this->title = 'Create Section Content';
$this->params['breadcrumbs'][] = ['label' => 'Section Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-content-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
