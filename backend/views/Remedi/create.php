<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RemedialPuja */

$this->title = 'Create Remedial Puja';
$this->params['breadcrumbs'][] = ['label' => 'Remedial Pujas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remedial-puja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
