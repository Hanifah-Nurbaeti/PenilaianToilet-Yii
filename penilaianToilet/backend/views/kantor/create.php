<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kantor */

$this->title = 'Create Kantor';
$this->params['breadcrumbs'][] = ['label' => 'Kantor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kantor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'daop' => $daop,
    ]) ?>

</div>
