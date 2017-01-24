<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>
	
	<h1 itemprop="name">Shiny Trinket</h1>
  <img itemprop="image" src="http://5e866d50.ngrok.io/apache_pb2.png" />
  <p itemprop="description">All that glitters is not <span style="color: gold">gold<span>.</p>
  <div class="g-plus" data-action="share" data-annotation="bubble" ></div>
  
	<button class="btn btn-warning btn-sm discuss-job b-hist" type="button" data-pjax="0" data-remote-url="<?= Url::to(['reviews/view'])?>"  data-target="#discuss-modal"  >View Feedback</button>
	

    <code><?= __FILE__ ?></code>
	
</div>
