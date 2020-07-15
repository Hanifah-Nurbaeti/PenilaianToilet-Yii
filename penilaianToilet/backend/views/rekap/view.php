<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\rekap */

$this->title = $model->id_rekap;
$this->params['breadcrumbs'][] = ['label' => 'Rekaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rekap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rekap], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rekap], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rekap',
            'created_at',
            'created_by',
            'bulan',
            'tahun',
            'daop.singkatan',
            'kantor.kantor_name',
            'station.station_name',
            'kereta.kereta_name',
            'toilet.nama',
            'respon.nama_respon',
            'ketidakpuasan.nama_ketidakpuasan',

        ],
    ]) ?>

</div>
