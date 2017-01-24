<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FeatureServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feature Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feature-services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Feature Services', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mtitle',
            'mkeywords:ntext',
            'mdesc:ntext',
            'link:ntext',
            // 'image',
            // 'name',
            // 'content:ntext',
            // 'category:ntext',
            // 'first_shortdesk',
            // 'second_shortdesk',
            // 'sub_name',
            // 'mainpage_footer:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
