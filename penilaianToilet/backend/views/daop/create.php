<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\daop */

$this->title = 'Create Daop';
$this->params['breadcrumbs'][] = ['label' => 'Daops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
