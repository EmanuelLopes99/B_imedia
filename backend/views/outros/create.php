<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Outros */

$this->title = 'Create Outros';
$this->params['breadcrumbs'][] = ['label' => 'Outros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
