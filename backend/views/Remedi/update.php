<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RemedialPuja */

$this->title = 'Update Remedial Puja: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Remedial Pujas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="remedial-puja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
