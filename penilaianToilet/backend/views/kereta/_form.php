<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\kereta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kereta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kereta_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kereta_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gerbong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_station')->dropDownList($station, ['prompt'=>'-pilih station-'])->label ('Nama Station') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
