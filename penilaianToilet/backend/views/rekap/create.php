<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\rekap */

$this->title = 'Create Rekap';
$this->params['breadcrumbs'][] = ['label' => 'Rekap', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'daop' => $daop,
        'Kantor' => $Kantor,
        'Station' => $Station,
        'Kereta' =>$Kereta,
        'toilet' => $toilet,
        'respon' => $respon,
        'ketidakpuasan' => $ketidakpuasan,
    ]) ?>

</div>
