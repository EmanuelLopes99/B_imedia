<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Abc */

$this->title = 'Create Abc';
$this->params['breadcrumbs'][] = ['label' => 'Abcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">ABC</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
