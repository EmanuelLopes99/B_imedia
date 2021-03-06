<?php

namespace backend\controllers;

use Yii;
use app\models\Imagens;
use app\models\ImagensSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile; 
use yii\data\ActiveDataProvider;

/**
 * ImagensController implements the CRUD actions for Imagens model.
 */
class ImagensController extends Controller
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
     * Lists all Imagens models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImagensSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Imagens::find();
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
     * Displays a single Imagens model.
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
     * Creates a new Imagens model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Imagens();

        if ($model->load(Yii::$app->request->post())) {
            $model->images = UploadedFile::getInstance($model, 'images');
            if($model->images && $model->validate()){
                if(!file_exists(Url::to(Yii::getAlias('webroot/upload')))){
                    mkdir(Url::to(Yii::getAlias('webroot/upload'), 0777, true));
                }
                $path = Url::to(Yii::getAlias('@webroot/upload'));
                    foreach ($model->images as $img) {
                        $upload = new Imagens();
                        $upload->images = time().rand(100, 999).'.'.$img->extension;
                        if($upload->save(false)){
                            $img->saveAs($path.$upload->images);
                        }
                    }
                     return $this->redirect(['view', 'id' => $model->id]);
            }
                        
            /*$ImgName = $imagem->baseName. '.' .$imagem->extension;
            $imagem->saveAs(Yii::getAlias('@ImgPath'). '/' .$ImgName);
            $model->images = $ImgName;
            $model->save();*/

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Imagens model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $imagem= UploadedFile::getInstance($model, 'images');
            if($imagem != null){
                $ImgName = $imagem->baseName. '.' .$imagem->extension;
                $imagem->saveAs(Yii::getAlias('@webroot/upload'). '/' .$ImgName);
                $model->images = $ImgName;
                $model->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Imagens model.
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
     * Finds the Imagens model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Imagens the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Imagens::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
