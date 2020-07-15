<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kantor */

$this->title = 'Update Kantor: ' . $model->id_kantor;
$this->params['breadcrumbs'][] = ['label' => 'Kantor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kantor, 'url' => ['view', 'id' => $model->id_kantor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kantor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'daop' => $daop,
    ]) ?>

</div>
