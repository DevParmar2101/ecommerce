<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;

/**
 * Blog Controller
 */
class BlogController extends Controller
{

    /**
     * Displays blog homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}