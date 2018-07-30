<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">About</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
       <!--  <!?= Html::button('<i class="glyphicon glyphicon-plus"></i> About', ['value' => Url::to('index.php?r=about/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?>
         <!?= Html::button('<i class="glyphicon glyphicon-plus"></i> Equipe', ['value' => Url::to('index.php?r=equipe/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?> -->
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Abouts', ['create'], ['class' => 'btn btn-primary']) ?>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Equipas', ['equipe/index'], ['class' => 'btn btn-primary'])?>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Images', ['imagens/index'], ['class' => 'btn btn-primary'])?>
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
            'missao:ntext',
            'filosofia:ntext',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
