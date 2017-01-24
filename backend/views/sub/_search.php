<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SubSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-poojalu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_keyword') ?>

    <?= $form->field($model, 'meta_desc') ?>

    <?= $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'puja_name') ?>

    <?php // echo $form->field($model, 'god_name') ?>

    <?php // echo $form->field($model, 'main_content') ?>

    <?php // echo $form->field($model, 'sub_content') ?>

    <?php // echo $form->field($model, 'side_content1') ?>

    <?php // echo $form->field($model, 'side_content2') ?>

    <?php // echo $form->field($model, 'advance_price') ?>

    <?php // echo $form->field($model, 'price_without_material') ?>

    <?php // echo $form->field($model, 'price_with_material') ?>

    <?php // echo $form->field($model, 'pooja_duration') ?>

    <?php // echo $form->field($model, 'top_service_order') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'audio_file') ?>

    <?php // echo $form->field($model, 'cat_id') ?>

    <?php // echo $form->field($model, 'astottaram_id') ?>

    <?php // echo $form->field($model, 'archana_name') ?>

    <?php // echo $form->field($model, 'archana_content') ?>

    <?php // echo $form->field($model, 'poojasamagri_name') ?>

    <?php // echo $form->field($model, 'poojasamagri_pdf') ?>

    <?php // echo $form->field($model, 'slokam_name') ?>

    <?php // echo $form->field($model, 'slokam_pdf') ?>

    <?php // echo $form->field($model, 'stotram_name') ?>

    <?php // echo $form->field($model, 'stotram_pdf') ?>

    <?php // echo $form->field($model, 'astottaram_name') ?>

    <?php // echo $form->field($model, 'astottaram_pdf') ?>

    <?php // echo $form->field($model, 'flower') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'naivedyam') ?>

    <?php // echo $form->field($model, 'master_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
