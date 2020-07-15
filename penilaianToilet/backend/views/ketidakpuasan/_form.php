<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ketidakpuasan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ketidakpuasan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ketidakpuasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'id_respon')->dropDownList($respon, ['prompt'=>'-pilih respon-'])->label ('Nama Respon') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
