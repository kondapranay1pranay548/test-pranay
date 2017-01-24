<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Poojalu(Sub Service)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-poojalu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Poojalu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'master_id', 
                'label' => 'Master Service Name',
                //'width'=>'150px',
                //'vAlign'=>'middle',
                //'group' => true,
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->master->puja_name;
                }
                
            ],
            'master_id',
            'puja_name',
            'god_name',
            'main_content:ntext',
            'sub_content:ntext',
            'side_content1:ntext',
            'meta_title:ntext',
            'meta_keyword:ntext',
            'meta_desc:ntext',
            
            //'slug',
            // 'link',
            // 'image',
            // 'icon',
             
            // 'side_content2:ntext',
            // 'advance_price',
            // 'price_without_material',
            // 'price_with_material',
            // 'pooja_duration',
            // 'top_service_order',
            // 'status',
            // 'audio_file',
            // 'cat_id',
            // 'astottaram_id',
            // 'archana_name',
            // 'archana_content:ntext',
            // 'poojasamagri_name',
            // 'poojasamagri_pdf:ntext',
            // 'slokam_name',
            // 'slokam_pdf:ntext',
            // 'stotram_name',
            // 'stotram_pdf:ntext',
            // 'astottaram_name',
            // 'astottaram_pdf:ntext',
            // 'flower',
            // 'day',
            // 'naivedyam',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
