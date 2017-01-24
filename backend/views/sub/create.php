<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SubPoojalu */

$this->title = 'Create Sub Poojalu';
$this->params['breadcrumbs'][] = ['label' => 'Sub Poojalus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-poojalu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
