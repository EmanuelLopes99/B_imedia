<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Homes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Home</h3>
    </div>
        <div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Home', ['create'], ['class' => 'btn btn-primary']) ?>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Logos', ['homelogo/index'], ['class' => 'btn btn-primary']) ?>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Noticias', ['noticias/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'missao:ntext',
            'visao:ntext',
            'valores:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
