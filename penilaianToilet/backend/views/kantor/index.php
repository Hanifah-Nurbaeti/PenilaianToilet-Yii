<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KantorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kantor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kantor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kantor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'kantor_city',
            'kantor_code',
            'kantor_name',
            'gedung',
            'daop.singkatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>