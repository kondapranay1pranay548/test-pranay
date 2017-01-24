<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FeatureServicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feature-services-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mtitle') ?>

    <?= $form->field($model, 'mkeywords') ?>

    <?= $form->field($model, 'mdesc') ?>

    <?= $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'first_shortdesk') ?>

    <?php // echo $form->field($model, 'second_shortdesk') ?>

    <?php // echo $form->field($model, 'sub_name') ?>

    <?php // echo $form->field($model, 'mainpage_footer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
