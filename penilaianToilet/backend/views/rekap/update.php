<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\rekap */

$this->title = 'Update Rekap: ' . $model->id_rekap;
$this->params['breadcrumbs'][] = ['label' => 'Rekaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekap, 'url' => ['view', 'id' => $model->id_rekap]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' => $Kereta,
            'toilet' => $toilet,
            'respon' => $respon,
            'ketidakpuasan' => $ketidakpuasan,
    ]) ?>

</div>
