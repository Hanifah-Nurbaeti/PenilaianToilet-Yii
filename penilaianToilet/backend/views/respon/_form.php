<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\respon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="respon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_respon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
