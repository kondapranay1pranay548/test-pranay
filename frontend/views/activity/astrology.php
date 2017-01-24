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
?>
<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-pattern page-title-center">

			<div class="container clearfix">
				<h1>Astrology & Horoscope Services</h1>
				<span>We offer you good services in astrology & horoscope by suggesting best remedial solutions.</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="pandit-services">Services</a></li>
					<li class="active">Astrology Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		
		<!-- Page Sub Menu
		============================================= -->
<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Call us today <p>at <span>+91.9908.234595</span> or Email us at <span><a  href="mailto:ask@poojalu.com?Subject=Need%20Astrology%20Service" target="_top">ask@poojalu.com</a></span></p></div>

					<nav>
						<ul>
							<li><a href="#" class="button button-xlarge">Book Now</a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div>


					<div class="container clearfix">

					<div class="clear bottommargin-lg"></div>

					<div id="section-features" class="heading-block title-center page-section">
						<h2>Features Overview</h2>
						<span>Some of the Features that are gonna blow your mind off</span>
					</div>

					<div class="col_half">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn">
								<i class="icon-pandit-kundali-chart"></i>
							</div>
							<h3>Horoscope Matching</h3>
							<p>We are very expertise in Performing horoscope matching for marriages to find right partner with kuja dosha (mangal dosh, maglik) checking.</p>
						</div>
					</div>

					<div class="col_half col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn" data-delay="200">
								<i class="icon-pandit-remedies"></i>
							</div>
							<h3>Remedial Solutions</h3>
							<p>We provide Remedial Solutions by reading your Personal Horoscope. And our astrologers will tell you what makes your Career path full.</p>
						</div>
					</div>
					<div class="clear"></div>
					<div class="col_half">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn" data-delay="800">
							<i class="icon-pandit-astro"></i>
							</div>
							<h3>Janma Kundali & Birth Charts</h3>
							<p>Our vedic astrologers will draw your birth charts (Janma Kundali) from the scratch including Nakshatra, Navamsha, Bhavas and Vimshottari.</p>
						</div>
					</div>

					<div class="col_half col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn" data-delay="1000">
						<i class="icon-pandit-graha"></i>
							</div>
							<h3>Nakshatra & Graha Doshas</h3>
							<p>Our astrologers will tell you a complete information about graha doshas & nakshatra doshas in kundli based on birth detail like Nakshatra, charana.
					</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_half">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn" data-delay="1200">
							<i class="icon-pandit-muhurat"></i>
							</div>
							<h3>Muhurth(Muhurat) Reports </h3>
							<p>The most auspicious time to start something is Muhurat. From our services you can get Grah Pravesh, Marriage & many more Mahurats. </p>
						</div>
					</div>

					
					<div class="col_half col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon bounceIn animated" data-animate="bounceIn" data-delay="1600">
								<i class="icon-pandit-gemstone"></i>
							</div>
							<h3>Gemstones Astrology 	</h3>
							<p>We offer best Gemstones Astrology service. Based on your birth chart we will suggest what gemstones will suit you to bring lick & success. </p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

					<div id="section-pricing" class="heading-block title-center nobottomborder page-section">
						<h2>Pricing Details</h2>
						<span>Our All inclusive Pricing Plan that covers you well</span>
					</div>

					<div class="pricing-box pricing-extended bottommargin clearfix">

						<div class="pricing-desc">
							<div class="pricing-title">
								<h3>How many Themes can you Download today?</h3>
							</div>
							<div class="pricing-features">
								<ul class="iconlist-color cleafix">
									<li><i class="icon-desktop"></i> Ultra Responsive Layouts</li>
									<li><i class="icon-eye-open"></i> Retina Ready Designs</li>
									<li><i class="icon-beaker"></i> Advanced Admin Panel</li>
									<li><i class="icon-magic"></i> Tons of Customization Options</li>
									<li><i class="icon-font"></i> Support for Custom Fonts</li>
									<li><i class="icon-stack3"></i> Premium Sliders Included</li>
									<li><i class="icon-file2"></i> Photoshop Source Files Included</li>
									<li><i class="icon-support"></i> 24x7 Priority Email Support</li>
								</ul>
							</div>
						</div>

						<div class="pricing-action-area">
							<div class="pricing-meta">
								As Low as
							</div>
							<div class="pricing-price">
								<span class="price-unit">€</span>39<span class="price-tenure">monthly</span>
							</div>
							<div class="pricing-action">
								<a href="#" class="button button-3d button-large btn-block nomargin">Get Started</a>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
