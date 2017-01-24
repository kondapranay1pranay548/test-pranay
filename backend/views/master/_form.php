<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\markdown\MarkdownEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\MasterPoojalu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-poojalu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(\yii\redactor\widgets\Redactor::className()) ?>
    <?php //$form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puja_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'god_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
