<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Crud */

$this->title = 'Update Crud: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
