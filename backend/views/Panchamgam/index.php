<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PanchamgamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Panchamgams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panchamgam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Panchamgam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'meta_title',
            'meta_keywords:ntext',
            'meta_desc:ntext',
            'panchamgam_data:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
