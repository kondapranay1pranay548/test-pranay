<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Cat;
use frontend\models\CatSearch;
use frontend\models\MasterPoojalu;
use frontend\models\SubPoojalu;
use frontend\models\BookingForm;
use frontend\models\RemedialPuja;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="stretched">
<?php $this->beginBody() ?>
<div  id="wrapper" class="  clearfix">
    								
		<?php 
                $parent_services = MasterPoojalu::find()->with('subPoojalus','subPoojalus.remedialPujas')->where(['between','id' , 1, 5])->all(); 
                $parent_services_second_men = MasterPoojalu::find()->with('subPoojalus','subPoojalus.remedialPujas')->where(['between','id' , 6, 10])->all(); 
                $remedialPujas = RemedialPuja::find()->all();
                $this_month_pooja = SubPoojalu::find()->where(['this_month'=>1])->one();
                $popular_pooja = SubPoojalu::find()->where(['popular'=>1])->all();
                //$remedialPujas = RemedialPuja::find()->all();
                //print_r($remedialPujas);

                ?>
		<?= $this->render('header_menu', ['parent_service' => $parent_services,'remedialPujas'=>$remedialPujas,'this_month' => $this_month_pooja,'popular_pooja'=>$popular_pooja,'parent_services_second_men'=>$parent_services_second_men]) ?>
		<!--Mobile Menu-->
		<div class="side-panel-left">
		
		<div class="body-overlay"></div>

	<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<h4>Pandit Services</h4>

				<nav class="nav-tree nobottommargin">
					<ul>
						<li><a href="index.php"><i class="icon-home2"></i>Home</a></li>
						<li><a href="#"><i class="icon-line-layers"></i>Puja Categories</a>
							<ul>
								
												<li><a href="" tabindex="-1"></a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icon-files"></i>Services</a>
							<ul>
								<li><a href="pandit-services">Pooja Services</a></li>
								<li><a href="astrology-services">Astrology Servies</a></li>
								<li><a href="#">Muhurtam Fixing</a></li>
								<li><a href="catering-services">Catering Services</a></li>
								<li><a href="epuja-service">ePuja Services</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icon-newspaper"></i>Resources</a>
							<ul>
								<li><a href="list-of-pooja-and-havan-samagri">Puja Samagri Lists</a></li>
								<li><a href="astottara.php">Ashtottaras</a></li>
								<li><a href="pandit-for-pooja">Our Pandits</a></li>
								<li><a href="puja-stores">Our Stores</a></li>
								<li><a href="hindu-gods-temples-live-darshanas">Live Darshan</a></li>
								<li><a href="all-hindu-gods-and-goddess-information">Gods & Goddess Info</a></li>
							</ul>
						</li>
						<li><a href="festival-feason-offers-for-poojas-havans"><i class="icon-gift"></i>Offers</a></li>
						<li><a href="/blog"><i class="icon-blogger"></i>Blog</a></li>
						<li><a href="pandit-service-providers-in-hyderabad"><i class="icon-map-marker"></i>Contact Us</a></li>
					</ul>
				</nav>

			</div>

			<div class="widget quick-contact-widget clearfix">

				<h4>Quick Contact</h4>
				<div class="quick-contact-form-result"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
					<div class="form-process"></div>
					<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
					<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
					<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
					<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
				</form>

			</div>

		</div>

	</div>
	</div>

	<!--Mobile Menu-->
        <?= $content ?>
    </div>
</div>
<?= $this->render('main_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<style>
panel-trigger {float: left;}
@media(max-width:476px){#side-panel-trigger {
    left: 0px !important;
}}
	@media(max-width:991px){#side-panel-trigger {
    left: 40px !important; 
}}
</style>

	<style>
panel-trigger {float: left;}
@media(max-width:476px){#side-panel-trigger {
    left: 0px !important;
}}
	@media(max-width:991px){#side-panel-trigger {
    left: 40px !important; 
}}
</style>
<style>
body:not(.no-transition) #wrapper, .animsition-overlay{opacity:1}
.footer{padding:0px}
</style>

