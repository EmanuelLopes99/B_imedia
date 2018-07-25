<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Galeria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeria-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'fotografia')->fileInput() ?>

    <?= $form->field($model, 'videos')->fileInput() ?>

    <?= $form->field($model, 'projetos')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>