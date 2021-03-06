<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tiket */

$this->title = 'Update Tiket: ' . $model->id_tiket;
$this->params['breadcrumbs'][] = ['label' => 'Tikets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tiket, 'url' => ['view', 'id' => $model->id_tiket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
