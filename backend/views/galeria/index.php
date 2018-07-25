<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GaleriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galerias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Galerias</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
        <?= Html::button('<i class="glyphicon glyphicon-plus"></i> Galeria', ['value' => Url::to('index.php?r=galeria/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?>
    </p>

    <?php 
        Modal::begin([
        //'header' => '<h4>Comentar</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        echo "<div id = 'modalContent'></div>";
        Modal::end();
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
             [
                'filter' => false,
                'attribute' => 'fotografia',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->fotografia,
                    ['width' => 70, 'height' => 55]);
                },
            ],
             [
                'filter' => false,
                'attribute' => 'videos',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->videos,
                    ['width' => 70, 'height' => 55]);
                },
            ],
             [
                'filter' => false,
                'attribute' => 'projetos',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->projetos,
                    ['width' => 70, 'height' => 55]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
