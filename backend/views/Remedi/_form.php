<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditor;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model frontend\models\RemedialPuja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="remedial-puja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puja_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'god_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

 
    <?php
    $listData = frontend\models\SubPoojalu::find()->select(['id',"puja_name"])->asArray()->all();
    $data = ArrayHelper::map($listData, 'id', 'puja_name');
    echo $form->field($model, 'sub_poojalu_id')->widget(Select2::classname(), [
                        //'initValueText' => $sevice_init,
                        'data' => $data, 
                        'options' => ['placeholder' => 'Select a service'],

                    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
