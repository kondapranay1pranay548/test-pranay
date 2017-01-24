<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FeatureServices */

$this->title = 'Create Feature Services';
$this->params['breadcrumbs'][] = ['label' => 'Feature Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feature-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
