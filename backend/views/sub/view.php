<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SubPoojalu */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Poojalus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-poojalu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'meta_title:ntext',
            'meta_keyword:ntext',
            'meta_desc:ntext',
            'slug',
            'link',
            'image',
            'icon',
            'puja_name',
            'god_name',
            'main_content:ntext',
            'sub_content:ntext',
            'side_content1:ntext',
            'side_content2:ntext',
            'advance_price',
            'price_without_material',
            'price_with_material',
            'pooja_duration',
            'top_service_order',
            'status',
            'audio_file',
            'cat_id',
            'astottaram_id',
            'archana_name',
            'archana_content:ntext',
            'poojasamagri_name',
            'poojasamagri_pdf:ntext',
            'slokam_name',
            'slokam_pdf:ntext',
            'stotram_name',
            'stotram_pdf:ntext',
            'astottaram_name',
            'astottaram_pdf:ntext',
            'flower',
            'day',
            'naivedyam',
            'master_id',
            'popular_text',
        ],
    ]) ?>

</div>
