<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\respon */

$this->title = 'Create Respon';
$this->params['breadcrumbs'][] = ['label' => 'Respons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="respon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
