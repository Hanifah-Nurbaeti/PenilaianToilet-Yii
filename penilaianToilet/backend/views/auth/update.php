<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Auth */

$this->title = 'Update Auth: ' . $model->id_auth;
$this->params['breadcrumbs'][] = ['label' => 'Auth', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_auth, 'url' => ['view', 'id' => $model->id_auth]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
