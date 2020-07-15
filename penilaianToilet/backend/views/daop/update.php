<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\daop */

$this->title = 'Update Daop: ' . $model->id_daop;
$this->params['breadcrumbs'][] = ['label' => 'Daops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daop, 'url' => ['view', 'id' => $model->id_daop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
