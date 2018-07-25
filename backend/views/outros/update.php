<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Outros */

$this->title = 'Update Outros: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Outros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Outros</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
