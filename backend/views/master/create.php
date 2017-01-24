<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MasterPoojalu */

$this->title = 'Create Master Poojalu';
$this->params['breadcrumbs'][] = ['label' => 'Master Poojalus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-poojalu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
