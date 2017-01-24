<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RemedialPuja */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Remedial Pujas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remedial-puja-view">

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
            'meta_keyword:ntext',
            'meta_title:ntext',
            'meta_desc:ntext',
            'icon',
            'link',
            'slug',
            'image',
            'puja_name',
            'god_name',
            'content:ntext',
            'sub_poojalu_id',
        ],
    ]) ?>

</div>
