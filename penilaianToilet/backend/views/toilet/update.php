<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\toilet */

$this->title = 'Update Toilet: ' . $model->id_toilet;
$this->params['breadcrumbs'][] = ['label' => 'Toilet', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_toilet, 'url' => ['view', 'id' => $model->id_toilet]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toilet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
			'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' =>$Kereta,
    ]) ?>

</div>
