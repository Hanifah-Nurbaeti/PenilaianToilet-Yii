<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KantorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kantor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kantor') ?>

    <?= $form->field($model, 'kantor_city') ?>

    <?= $form->field($model, 'kantor_code') ?>

    <?= $form->field($model, 'kantor_name') ?>

    <?= $form->field($model, 'gedung') ?>

    <?php echo $form->field($model, 'id_daop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
