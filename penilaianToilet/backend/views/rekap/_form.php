<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\rekap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_daop')->dropDownList($daop, ['prompt'=>'-pilih daop-'])->label ('Nama Daop') ?>

    <?= $form->field($model, 'id_kantor')->dropDownList($Kantor, ['prompt'=>'-pilih kantor-'])->label ('Nama Kantor') ?>

    <?= $form->field($model, 'id_station')->dropDownList($Station, ['prompt'=>'-pilih station-'])->label ('Nama Station') ?>

    <?= $form->field($model, 'id_kereta')->dropDownList($Kereta, ['prompt'=>'-pilih kereta-'])->label ('Nama Kereta') ?>
    <?= $form->field($model, 'id_toilet')->dropDownList($toilet, ['prompt'=>'-pilih toilet-'])->label ('Nama Toilet') ?>

    <?= $form->field($model, 'id_respon')->dropDownList($respon, ['prompt'=>'-pilih respon-'])->label ('Nama Respon') ?>

    <?= $form->field($model, 'id_ketidakpuasan')->dropDownList($ketidakpuasan, ['prompt'=>'-pilih ketidakpuasan-'])->label ('Nama Ketidakpuasan') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
