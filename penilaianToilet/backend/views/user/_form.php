<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\daop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['id' => 'form-user']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'name'=> 'add-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
