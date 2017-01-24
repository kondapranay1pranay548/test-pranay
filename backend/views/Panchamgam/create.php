<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Panchamgam */

$this->title = 'Create Panchamgam';
$this->params['breadcrumbs'][] = ['label' => 'Panchamgams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panchamgam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
