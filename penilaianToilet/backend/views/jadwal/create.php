<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\jadwal */

$this->title = 'Create Jadwal';
$this->params['breadcrumbs'][] = ['label' => 'Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'daop' => $daop,
        'kantor' => $Kantor,
        'station' => $Station,
        'kereta' =>$Kereta,
        'toilet' => $toilet,
    ]) ?>

</div>
