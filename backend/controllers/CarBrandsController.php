<?php

namespace backend\controllers;

use common\models\User;
use Yii;
use common\models\CarBrands;
use common\models\CarBrandsSearch;
use yii\helpers\Inflector;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CarBrandsController implements the CRUD actions for CarBrands model.
 */
class CarBrandsController extends Controller
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
     * Lists all CarBrands models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarBrandsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CarBrands model.
     * @param int $id ID
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CarBrands model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CarBrands();

        if ($model->load(Yii::$app->request->post())) {
            $model->brand_slug = Inflector::slug($model->brand_name);
            $model->created_by = Yii::$app->user->id;
            $image = UploadedFile::getInstance($model,'brand_logo');

            if ($image) {
                $model->brand_logo = $model->brand_name.rand(1,100).'.'.$image->extension;
            }
            if ($model->save(false)) {
                if ($image) {
                    $image->saveAs('uploads/car-brands/'.$model->brand_logo);
                }
                Yii::$app->session->setFlash('success','Car Brand created SuccessFully!');
                return $this->redirect(['view','id' => $model->id]);
            }else{
                echo '<pre>';
                print_r($model);
                die();
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CarBrands model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $logo_image = null;
        if ($model->brand_logo){
            $logo_image = $model->brand_logo;
        }

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model,'brand_logo');
            if ($image) {
                $model->brand_logo = base64_encode($model->brand_name).rand(1,100).'.'.$image->extension;
            }else{
                $model->brand_logo = $logo_image;
            }
            if ($model->save(false)) {
                if ($image) {
                    $image->saveAs('uploads/car-brands/'.$model->brand_logo);
                }
                Yii::$app->session->setFlash('success','Car Brand Data Updated SuccessFully!');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CarBrands model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CarBrands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return CarBrands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CarBrands::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
