<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HoroscopeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscope-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_description') ?>

    <?= $form->field($model, 'meta_keywords') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'sub_name') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
