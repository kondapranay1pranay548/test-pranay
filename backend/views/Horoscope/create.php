<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Horoscope */

$this->title = 'Create Horoscope';
$this->params['breadcrumbs'][] = ['label' => 'Horoscopes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscope-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
