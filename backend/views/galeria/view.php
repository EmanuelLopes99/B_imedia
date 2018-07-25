<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Galeria */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Galerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Galerias</h3>
    </div>
        <div class="panel-body">

        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'fotografia',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->fotografia,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ],
            [
                'attribute' => 'videos',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->videos,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ],
            [
                'attribute' => 'projetos',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->projetos,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ]
        ],
    ]) ?>

</div></div>
