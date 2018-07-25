<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\Blog;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //contar total de registro no banco
        $querys = new \yii\db\Query();
        $contarPost = $querys->select('*')->from('blog')->count();
        $contarUsuario = $querys->select('*')->from('user')->count();
        $contarComentarios = $querys->select('*')->from('comentario')->count();

        //efetuar comentario no post
        $mostrarComentario = $querys->select('*')->from('{{comentario}}')->innerJoin('{{blog}}','blog.id = comentario.id_blog')->orderBy('data DESC')->limit(3)->all();
        $mostrarPost = Blog::find()->orderBy('data_blog DESC')->limit(3)->all();

        return $this->render('index',[
            'contarPost'=> $contarPost,
            'contarUsuario' => $contarUsuario,
            'contarComentarios' => $contarComentarios,
            'mostrarComentario' => $mostrarComentario,
            'mostrarPost' => $mostrarPost,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
