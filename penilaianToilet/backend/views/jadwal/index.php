<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_jadwal',
            'user.username',
            'hari',
            'waktu_awal',
            'waktu_akhir',
            'daop.singkatan',
            'kantor.kantor_name',
            'station.station_name',
            'kereta.kereta_name',
            'toilet.nama_toilet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
