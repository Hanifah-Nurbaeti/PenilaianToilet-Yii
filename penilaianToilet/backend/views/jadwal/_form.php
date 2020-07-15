<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->dropDownList($user, ['prompt'=>'-pilih user-'])->label ('Nama User') ?>

    <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_awal')->textInput() ?>

    <?= $form->field($model, 'waktu_akhir')->textInput() ?>

    <?= $form->field($model, 'id_daop')->dropDownList($daop, ['prompt'=>'-pilih daop-'])->label ('Nama Daop') ?>

    <?= $form->field($model, 'id_kantor')->dropDownList($kantor, ['prompt'=>'-pilih kantor-'])->label ('Nama Kantor') ?>

    <?= $form->field($model, 'id_station')->dropDownList($station, ['prompt'=>'-pilih station-'])->label ('Nama Station') ?>

    <?= $form->field($model, 'id_kereta')->dropDownList($kereta, ['prompt'=>'-pilih kereta-'])->label ('Nama Kereta') ?>
    <?= $form->field($model, 'id_toilet')->dropDownList($toilet, ['prompt'=>'-pilih toilet-'])->label ('Nama Toilet') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
