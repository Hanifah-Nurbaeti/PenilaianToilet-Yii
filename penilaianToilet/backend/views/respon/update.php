<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\respon */

$this->title = 'Update Respon: ' . $model->id_respon;
$this->params['breadcrumbs'][] = ['label' => 'Respons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_respon, 'url' => ['view', 'id' => $model->id_respon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="respon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
