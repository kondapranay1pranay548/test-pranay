<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Monthinfo */

$this->title = 'Create Monthinfo';
$this->params['breadcrumbs'][] = ['label' => 'Monthinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monthinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
