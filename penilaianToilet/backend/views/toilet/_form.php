<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\toilet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toilet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_toilet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kantor')->dropDownList($Kantor, ['prompt'=>'-pilih kantor-'])->label ('Nama Kantor') ?>

    <?= $form->field($model, 'id_station')->dropDownList($Station, ['prompt'=>'-pilih station-'])->label ('Nama Station') ?>

    <?= $form->field($model, 'id_kereta')->dropDownList($Kereta, ['prompt'=>'-pilih kereta-'])->label ('Nama Kereta') ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
