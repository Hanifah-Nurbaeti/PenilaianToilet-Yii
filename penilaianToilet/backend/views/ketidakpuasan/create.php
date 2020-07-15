<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ketidakpuasan */

$this->title = 'Create Ketidakpuasan';
$this->params['breadcrumbs'][] = ['label' => 'Ketidakpuasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketidakpuasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'respon' => $respon,
    ]) ?>

</div>
