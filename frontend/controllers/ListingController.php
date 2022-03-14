<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;

/**
 * Listing Controller
 */

class ListingController extends Controller

{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
