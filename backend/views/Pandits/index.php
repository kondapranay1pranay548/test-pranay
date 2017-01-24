<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pandits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pandits-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pandits', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'sub_name',
            'category:ntext',
            'phone',
            // 'email:email',
            // 'city:ntext',
            // 'content:ntext',
            // 'image',
            // 'mtitle',
            // 'mkeywords:ntext',
            // 'mdesc:ntext',
            // 'link:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
