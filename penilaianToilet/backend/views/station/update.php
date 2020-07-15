<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\station */

$this->title = 'Update Station: ' . $model->id_station;
$this->params['breadcrumbs'][] = ['label' => 'Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_station, 'url' => ['view', 'id' => $model->id_station]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="station-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'daop' => $daop,
    ]) ?>

</div>
