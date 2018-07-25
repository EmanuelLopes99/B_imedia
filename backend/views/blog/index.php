<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Blogs</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('<i class="glyphicon glyphicon-plus"></i> Blog', ['value' => Url::to('index.php?r=blog/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?>
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
            'nome',
            'categoria',
            'descricao:ntext',
             [
                'filter' => false,
                'attribute' => 'post',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->post,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            //'data_blog',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
