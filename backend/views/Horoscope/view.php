<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Horoscope */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Horoscopes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscope-view">

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
            'meta_title',
            'meta_description',
            'meta_keywords',
            'title',
            'category',
            'link',
            'sub_name',
            'file',
            'content:ntext',
        ],
    ]) ?>

</div>
