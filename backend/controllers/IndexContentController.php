<?php

namespace backend\controllers;

use Yii;
use common\models\IndexContent;
use common\models\IndexContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IndexContentController implements the CRUD actions for IndexContent model.
 */
class IndexContentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all IndexContent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = IndexContent::findOne(['id' => IndexContent::FIRST_ID]);
        if (!$model) {
            $model = new IndexContent();
        }
        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()){
                return $this->redirect('index');
            }

        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Finds the IndexContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return IndexContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IndexContent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
