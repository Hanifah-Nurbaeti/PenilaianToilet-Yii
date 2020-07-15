<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\jadwal */

$this->title = 'Update Jadwal: ' . $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'daop' => $daop,
        'kantor' => $Kantor,
        'station' => $Station,
        'kereta' =>$Kereta,
        'toilet' => $toilet,
    ]) ?>

</div>
