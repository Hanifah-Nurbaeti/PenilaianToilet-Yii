<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\station */

$this->title = 'Create Station';
$this->params['breadcrumbs'][] = ['label' => 'Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="station-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'daop' => $daop,
    ]) ?>

</div>
