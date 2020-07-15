<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KeretaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kereta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kereta') ?>

    <?= $form->field($model, 'kereta_code') ?>

    <?= $form->field($model, 'kereta_name') ?>

    <?= $form->field($model, 'gerbong') ?>

    <?= $form->field($model, 'id_station') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
