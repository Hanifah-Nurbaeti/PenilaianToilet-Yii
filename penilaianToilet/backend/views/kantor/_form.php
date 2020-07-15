<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\kantor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kantor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kantor_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kantor_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kantor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gedung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_daop')->dropDownList($daop, ['prompt'=>'-pilih daop-'])->label ('Nama Daop') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
