<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ketidakpuasan */

$this->title = 'Update Ketidakpuasan: ' . $model->id_ketidakpuasan;
$this->params['breadcrumbs'][] = ['label' => 'Ketidakpuasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ketidakpuasan, 'url' => ['view', 'id' => $model->id_ketidakpuasan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ketidakpuasan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
