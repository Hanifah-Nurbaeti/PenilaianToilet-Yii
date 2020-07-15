<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="station-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_station') ?>

    <?= $form->field($model, 'station_code') ?>

    <?= $form->field($model, 'station_name') ?>

    <?= $form->field($model, 'station_city') ?>

    <?= $form->field($model, 'id_daop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
