<?php

use yii\helpers\Html;

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
        <!--?= Html::button('<i class="glyphicon glyphicon-plus"></i> Galeria', ['value' => Url::to('index.php?r=galeria/create'),'class' => 'btn btn-primary', 'id' => 'modalButton']) ?-->
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Fotografias', ['fotografia/index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Videos', ['video/index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Designs', ['design/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div></div>
