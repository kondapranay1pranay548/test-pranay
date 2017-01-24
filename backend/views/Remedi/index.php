<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RemediSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Remedial Pujas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remedial-puja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Remedial Puja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sub_poojalu_id',
            [
                'attribute'=>'master_id', 
                'label' => 'Master Service Name',
                //'width'=>'150px',
                //'vAlign'=>'middle',
                //'group' => true,
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->subPoojalu->puja_name;
                }
                
            ],
            'puja_name',
            'god_name',
            'content:ntext',
            'meta_keyword:ntext',
            'meta_title:ntext',
            'meta_desc:ntext',
            'icon',
            // 'link',
            // 'slug',
            // 'image',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
