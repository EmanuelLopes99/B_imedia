<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'missao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'valores')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
