<?php

namespace backend\controllers;

use Yii;
use app\models\Homelogo;
use app\models\HomelogoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile; 
use yii\data\ActiveDataProvider;

/**
 * HomelogoController implements the CRUD actions for Homelogo model.
 */
class HomelogoController extends Controller
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
     * Lists all Homelogo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HomelogoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Homelogo::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Homelogo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Homelogo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Homelogo();

         if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            $images= UploadedFile::getInstance($model, 'logos');
            if($images != null){
                $ImgName = $images->baseName. '.' .$images->extension;
                $images->saveAs(Yii::getAlias('@webroot/upload'). '/' .$ImgName);
                $model->logos = $ImgName;
                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Homelogo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            if($images != null){
                $ImgName = $images->baseName. '.' .$images->extension;
                $images->saveAs(Yii::getAlias('@webroot/upload'). '/' .$ImgName);
                $model->logos = $ImgName;
                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }    
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Homelogo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Homelogo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Homelogo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Homelogo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
