<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DaopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daop';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Daop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'nama',
            'singkatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
