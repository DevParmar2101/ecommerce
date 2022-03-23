<?php

namespace frontend\controllers;

use common\models\Blog;
use common\models\BlogSearch;
use yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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
        $searchModel= new BlogSearch();
        $searchModel->status = Blog::find()->where(['status' => Blog::ACTIVE])->all();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionBlogInner($slug)
    {

        return $this->render('blog-inner',[
            'model' => $this->findModel($slug)
        ]);
    }

    /**
     * @param $slug
     * @return Blog|null
     * @throws NotFoundHttpException
     */
    protected function findModel($slug)
    {
        if (($model = Blog::findOne($slug)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}