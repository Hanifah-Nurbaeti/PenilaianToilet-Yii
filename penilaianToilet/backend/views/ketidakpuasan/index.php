<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KetidakpuasanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ketidakpuasan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketidakpuasan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ketidakpuasan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_ketidakpuasan',
            'nama_ketidakpuasan',
            'gambar:ntext',
            'id_respon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
