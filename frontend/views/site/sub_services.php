<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use frontend\models\SubPoojalu;

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
//$model->subPoojalus->remedialPujas;
//foreach($model as $sub_services)
//foreach($model as $sub_services)
//{
//    
//  foreach($sub_services->subPoojalus as $sub_service_name)
//  {
//      echo $sub_service_name->puja_name;
//      echo "<br>";
//      echo Html::a(
//            $sub_service_name->puja_name, [$sub_service_name->puja_name], array(
//        'class' => '', 'id' => 'delete_btn_',
//            )
//    );
//              
//      echo "<a href='http://localhost/test/test/$sub_service_name->puja_name'>$sub_service_name->puja_name</a>";
//      echo "<br>";
//        foreach($sub_service_name->remedialPujas as $remed)
//         {
//            echo $remed-> puja_name;
//        }
//      
//  }
//  
//}

//print_r($model->remedialPujas);
?>
<section id="content">
    <div class="content-wrap">
        <div id="posts" class="post-grid grid-container post-masonry post-masonry-full grid-3 clearfix">
            <?php foreach ($model as $sub_services) { ?>

                <?php foreach ($sub_services->subPoojalus as $sub_service_name) { ?>


                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="<?php echo strtolower(str_replace(' ', '-', $sub_service_name->puja_name)); ?>"><i class="i-alt"><?php echo $sub_service_name->image; ?></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="<?php echo strtolower(str_replace(' ', '-', $sub_service_name->puja_name)); ?>"><?php echo $sub_service_name->puja_name; ?><span class="subtitle"><?php echo $sub_service_name->puja_name; ?></a></h2>
                        </div>
                        <div class="entry-content event-content">
                            <span class="span-layer"></span>

                            <p ><?php echo $sub_service_name->sub_content; ?></p>

                        </div><p class="nobottommargin"><a href="<?php echo Yii::$app->params['mainLink'] . strtolower(str_replace(' ', '-', $sub_service_name->puja_name)); ?>" class="button button-large button-rounded">See More</a></p>
                    </div>
                <?php } ?>	
            </div><!-- #posts end -->

        </div>

    </section><!-- #content end -->  

<?php } ?>



<style>
    .event-content{height: 275px;
position: relative;
overflow: hidden;
margin-bottom: 30px;}
@media(max-width:767px){.event-content{height: 60px;}}
	span.span-layer {
    bottom: 0px;
    left: 0;
    width: 100%;
    height: 20%;
    text-align: center;
    margin: 0;
    background: -moz-linear-gradient(top,rgba(255,255,255,0) 0,#fafafa 100%);
    /* background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(255,255,255,0)),color-stop(100%,#fafafa)); */
    /* background: -webkit-linear-gradient(top,rgba(255,255,255,0) 0,#fafafa 100%); */
    background: -o-linear-gradient(top,rgba(255,255,255,0) 0,#fafafa 100%);
    background: -ms-linear-gradient(top,rgba(255,255,255,0) 0,#fafafa 100%);
    background: linear-gradient(to bottom,rgba(255, 255, 255, 0.3) 0,#fff 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#fafafa', GradientType=0);
    z-index: 0;
    position: absolute;
}
</style>
