<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KetidakpuasanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ketidakpuasan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ketidakpuasan') ?>

    <?= $form->field($model, 'nama_ketidakpuasan') ?>

    <?= $form->field($model, 'gambar') ?>

    <?= $form->field($model, 'id_respon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
