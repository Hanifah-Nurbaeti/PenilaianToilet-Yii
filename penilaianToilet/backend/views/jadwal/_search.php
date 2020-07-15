<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JadwalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jadwal') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hari') ?>

    <?= $form->field($model, 'waktu_awal') ?>

    <?= $form->field($model, 'waktu_akhir') ?>

    <?= $form->field($model, 'id_toilet') ?>

    <?php // echo $form->field($model, 'id_kantor') ?>

    <?php // echo $form->field($model, 'id_station') ?>

    <?php // echo $form->field($model, 'id_kereta') ?>

    <?php // echo $form->field($model, 'id_daop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
