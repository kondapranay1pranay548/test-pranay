<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Poojastores */

$this->title = 'Create Poojastores';
$this->params['breadcrumbs'][] = ['label' => 'Poojastores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poojastores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
