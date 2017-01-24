<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use frontend\models\SubPoojalu;
Yii::$app->view->title ='services';
Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => 'Description of the page']);
Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => 'Description of the page']);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "<pre>"; print_r($main_end);
//$model = new SubPoojalu();
//print_r($model->getRemedialPujas());
//exit;
//echo "<pre>"; print_r($model);

foreach($model as $services)
{
//      echo $relativeHomeUrl = Url::home(); 
//      
//    echo Html::a(
//            $services->puja_name, ['pooja-service/'.$services->puja_name], array(
//        'class' => '', 'id' => 'service',
//            )
//    );
//    echo "<br>";
    //echo '<a href=" Url::to($services->puja_name)">check</a>';
//    echo "<a href='http://localhost/test/test/$services->puja_name'>$services->puja_name</a>";
//    echo "<br>";
}

?>

		
<section id="content">

    <div class="content-wrap nobottompadding ">

        <div class="container clearfix">

            <div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">
                <?php foreach($model as $services) { ?>
                <div class="col-md-4 bottommargin-lg ">
                        <div class="feature-box fbox-center fbox-bg  fbox-effect ">
                                <div class="fbox-icon">
                                        <a href=""><i class="icon-pandit- i-alt"></i></a>
                                </div>
                                <h3></h3>
                                <p>Book Pandit for <?php echo $services->puja_name; ?></p>
                                <a href="<?php echo 'pooja-service/' . $services->puja_name; ?>" class="button topmargin-sm "><?php echo $services->puja_name; ?></a>
                        </div>
                </div>
            <?php     }  ?>
            <div class="clear"></div>

            </div>
        </div>

    </div>

		</section><!-- #content end -->
   

