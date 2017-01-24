<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-poojalu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'meta_keyword') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_desc') ?>

    <?= $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'puja_name') ?>

    <?php // echo $form->field($model, 'god_name') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'category') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
