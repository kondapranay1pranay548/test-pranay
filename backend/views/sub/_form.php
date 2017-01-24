<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditor;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\SubPoojalu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-poojalu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?php $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'icon')->textInput() ?>

    <?= $form->field($model, 'puja_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'god_name')->textInput() ?>

    <?= $form->field($model, 'main_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sub_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'side_content1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'side_content2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'advance_price')->textInput() ?>

    <?= $form->field($model, 'price_without_material')->textInput() ?>

    <?= $form->field($model, 'price_with_material')->textInput() ?>

    <?= $form->field($model, 'pooja_duration')->textInput() ?>

    <?= $form->field($model, 'top_service_order')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'audio_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'astottaram_id')->textInput() ?>

    <?= $form->field($model, 'archana_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archana_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poojasamagri_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poojasamagri_pdf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slokam_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slokam_pdf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stotram_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stotram_pdf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'astottaram_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'astottaram_pdf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'flower')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day')->textInput() ?>

    <?= $form->field($model, 'naivedyam')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'popular_text')->textInput(['maxlength' => true]) ?>
    
    

    <?php
    $listData = frontend\models\MasterPoojalu::find()->select(['id',"puja_name"])->asArray()->all();
    $data = ArrayHelper::map($listData, 'id', 'puja_name');
    echo $form->field($model, 'master_id')->widget(Select2::classname(), [
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
