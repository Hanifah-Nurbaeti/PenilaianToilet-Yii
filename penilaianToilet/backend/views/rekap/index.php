<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_rekap',
            'created_at',
            'created_by',
            'tanggal',
            //'bulan',
            //'tahun',
            //'daop.singkatan',
            //'kantor.kantor_name',
            //'station.station_name',
            //'kereta.kereta_name',
            //'toilet.nama',
            'respon.nama_respon',
            'ketidakpuasan.nama_ketidakpuasan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
