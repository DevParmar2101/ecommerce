<?php

use yii\helpers\Html;

/* @var $category \common\models\BlogCategory*/
?>

<div class="sidebar-widget mt-60 mb-55">
    <h4 class="pro-sidebar-title2">Categories </h4>
    <div class="sidebar-widget-list mt-40">
        <ul>
            <?php foreach ($category as $list){?>
            <li><a href="#"><?= $list->name?></a> <span>(3)</span></li>
            <?php }?>
        </ul>
    </div>
</div>
