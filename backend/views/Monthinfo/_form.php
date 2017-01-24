<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Monthinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monthinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mkeywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mdesc')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'month_data')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'month_data')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
