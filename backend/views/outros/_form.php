<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Outros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'criatividade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solucoes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_equipe')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
