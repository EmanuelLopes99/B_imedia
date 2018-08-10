<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComentarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comentarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Comentarios</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
        <!--?= Html::button('<i class="glyphicon glyphicon-plus"></i> Comentario', ['value' => Url::to('index.php?r=comentario/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?-->
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Comentario', ['create'], ['class' => 'btn btn-primary']) ?>
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
            'comentario:ntext',
            'data',
            'id_blog',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
