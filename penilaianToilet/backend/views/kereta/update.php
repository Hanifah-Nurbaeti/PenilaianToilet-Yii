<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kereta */

$this->title = 'Update Kereta: ' . $model->id_kereta;
$this->params['breadcrumbs'][] = ['label' => 'Keretas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kereta, 'url' => ['view', 'id' => $model->id_kereta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kereta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'station' => $station,
    ]) ?>

</div>
