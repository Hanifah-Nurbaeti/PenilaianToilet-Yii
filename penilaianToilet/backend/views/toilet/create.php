<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\toilet */

$this->title = 'Create Toilet';
$this->params['breadcrumbs'][] = ['label' => 'Toilet', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toilet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'Kantor' => $Kantor,
        'Station' => $Station,
        'Kereta' =>$Kereta,
    ]) ?>

</div>
