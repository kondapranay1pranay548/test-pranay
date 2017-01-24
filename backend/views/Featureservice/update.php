<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FeatureServices */

$this->title = 'Update Feature Services: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feature Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feature-services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
