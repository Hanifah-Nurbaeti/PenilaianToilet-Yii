<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kereta */

$this->title = 'Create Kereta';
$this->params['breadcrumbs'][] = ['label' => 'Keretas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kereta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'station' => $station,
    ]) ?>

</div>
