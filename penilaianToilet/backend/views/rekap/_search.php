<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rekap') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'created_by') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'id_daop') ?>

    <?php // echo $form->field($model, 'id_kantor') ?>

    <?php // echo $form->field($model, 'id_station') ?>

    <?php // echo $form->field($model, 'id_kereta') ?>

    <?php // echo $form->field($model, 'id_toilet') ?>

    <?php // echo $form->field($model, 'id_respon') ?>

    <?php // echo $form->field($model, 'id_ketidakpuasan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
