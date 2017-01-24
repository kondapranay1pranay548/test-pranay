<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    								<!-- Header
		============================================= -->
		<header id="header" class="semi-transparent full-header">

			<div id="header-wrap">

				<div class="container clearfix">
                   <div id="side-panel-trigger" class="side-panel-trigger hidden-md hidden-lg"><a href="#"><i class="icon-reorder"></i></a></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo"><img src="images/logo.png" alt="Pandit Services "></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo"><img src="images/logo" alt="Pandit Services "></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-4 ">

						<ul class="hidden-sm ">
							<li class=""><a href="index.php"><div>Home</div></a></li>
							<li class="mega-menu"><a href="#"><div>Puja</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-2">
										<li>
											<div class="widget clearfix">

												<h4>This Month Puja</h4>

												<div class="ipost clearfix">
													<div class="entry-image">
														<a href="varalakshmi-vratam"><img class="image_fade" src="images/menu/Varalakshmi-Vratha-Pooja.jpg" alt="Varalakshmi Vratha 
														Pooja"></a>
													</div>
													<div class="entry-title">
														<h3><a href="varalakshmi-vratam">Varalakshmi Vratham</a></h3>
													</div>
													<ul class="entry-meta clearfix">
														<li><i class="icon-calendar3"></i> 12th Aug 2016</li>
													</ul>
												</div>

											</div>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li>
											<div class="widget clearfix">

												<h4>Most Popular Pujas</h4>

												<div>
													<div class="spost clearfix">
														<div class="entry-image">
															<a href="griha-pravesh-pooja" class="nobg"><img class="img-circle" src="images/menu/Griha-Pravesh-Puja.jpg" alt="Griha Pravesh Puja"></a>
														</div>
														<div class="entry-c">
															<div class="entry-title">
																<h4><a href="griha-pravesh-pooja">Griha Pravesh Puja</a></h4>
															</div>
<ul class="entry-meta">
																<li><i class="icon-comments-alt"></i>Dwara puja, Ganesh Puja, Punyahavachan, Vastu Puja etc</li>
															</ul>
														</div>
													</div>

													<div class="spost clearfix">
														<div class="entry-image">
															<a href="lakshmi-ganapathi-havan" class="nobg"><img class="img-circle" src="images/menu/Lakshmi-Ganapathi-Havan-Puja.jpg" alt="Lakshmi Ganapathi Havan Puja"></a>
														</div>
														<div class="entry-c">
															<div class="entry-title">
																<h4><a href="lakshmi-ganapathi-havan">Lakshmi Ganapathi Havan Puja</a></h4>
															</div>
<ul class="entry-meta">
																<li><i class="icon-comments-alt"></i> Ganesh Puja, Mandapa Aaradhana, Agni Mukham etc</li>
															</ul>
														</div>
													</div>

													<div class="spost clearfix">
														<div class="entry-image">
															<a href="satyanarayana-vratam-pooja" class="nobg"><img class="img-circle" src="images/menu/Satyanarayana-Vrata-Puja.jpg" alt="Satyanarayana Vrata Puja"></a>
														</div>
														<div class="entry-c">
															<div class="entry-title">
																<h4><a href="satyanarayana-vratam-pooja">Satyanarayana Vrata Puja</a></h4>
															</div>
<ul class="entry-meta">
																<li><i class="icon-comments-alt"></i>Ganesh Puja, Mandapa Puja, Aavahana etc</li>
															</ul>
														</div>
													</div>
												</div>

											</div>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
<div  class="widget clearfix"><h4>Categories</h4></div>								<li>
								<div class="mega-menu-column col-md-6 noleftpadding norightpadding">

										<ul>
											

						
												<li><a href=" tabindex="-1"><a>Check</a></li>
												
										</li>
									</ul>
									</div>
									<div class="mega-menu-column col-md-6 norightpadding">
										<ul>
										<li><a href="" tabindex="-1">Check2</li>	
										</li>
									</ul>
									</div>
									</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li>
											<div class="widget clearfix">
												<div class="alert alert-info nobottommargin">Use Bootstrap Grid to create the Mega Menu Columns which allows you to Flexibly use Mixed Width Columns and Widgets of all Sizes.</div>
											</div>

											<div class="widget clearfix">

												<h4>Remedial Pujas</h4>

												<div class="tagcloud">
													<a href="#">Success</a>
													<a href="#">Health</a>
													<a href="#">Wealth</a>
													<a href="#">Family/Relation</a>
													<a href="#">Dosha Nivarana</a>
													<a href="#">Business</a>
													<a href="#">Children</a>
													<a href="#">Education</a>
													<a href="#">Acting/Dancing</a>
													<a href="#">Career Growth</a>
													<a href="#">Court Issues</a>
													<a href="#">Mangalik Dosha</a>
													
												</div>

											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Services</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-12">
										<li>
											<div class="widget clearfix">

												<!-- Services Items
												============================================= -->
												<div class="portfolio portfolio-5 clearfix">

													<article class="portfolio-item pf-media pf-icons">
														<div class="portfolio-image">
															<a href="pandit-services">
																<img src="images/menu/Pooja-Services.jpg" alt="Pooja Services">
															</a>
															<div class="portfolio-overlay">
																<a href="pandit-services" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="pandit-services">Pooja Services</a></h3>
															<span><a href="#">Abhisheka Puja</a>, <a href="#">Havan Puja</a> etc</span>
														</div>
													</article>

													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="astrology-services">
																<img src="images/menu/Astrology-Servies.jpg" alt="Astrology Services">
															</a>
															<div class="portfolio-overlay">
																<a href="astrology-services" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="astrology-services">Astrology Servies</a></h3>
															<span>Kundali, Remedial Solutions etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="#">
																<img src="images/menu/Muhurtam-Fixing.jpg" alt="Muhurtam Fixing">
															</a>
															<div class="portfolio-overlay">
																<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="#">Muhurtam Fixing</a></h3>
															<span>Tarabla, Chandrabala  etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="catering-services">
																<img src="images/menu/Catering-Services.jpg" alt="Catering Services">
															</a>
															<div class="portfolio-overlay">
																<a href="catering-services" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="catering-services">Catering Services</a></h3>
															<span>Catering for Pujas, Festivals etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="epuja-service">
																<img src="images/menu/ePuja-Services.jpg" alt="ePuja Services">
															</a>
															<div class="portfolio-overlay">
																<a href="epuja-service" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="epuja-service">ePuja Services</a></h3>
															<span>Online Pujas, Virtual Pujas etc</span>
														</div>
													</article>

												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Resources</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-12">
										<li>
											<div class="widget clearfix">

												<!-- Resources Items
												============================================= -->
												<div class="portfolio portfolio-6 clearfix">

													<article class="portfolio-item pf-media pf-icons">
														<div class="portfolio-image">
															<a href="list-of-pooja-and-havan-samagri">
																<img src="images/menu/Puja-Samagri-Lists.jpg" alt="Puja Samagri Lists">
															</a>
															<div class="portfolio-overlay">
																<a href="list-of-pooja-and-havan-samagri" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="list-of-pooja-and-havan-samagri">Puja Samagri Lists</a></h3>
															<span><a href="#">Puja Samagri</a>,<a href="#">Havan Samagri</a></span>
														</div>
													</article>

													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="astottara.php">
																<img src="images/menu/Ashtottaras.jpg" alt="Ashtottaras">
															</a>
															<div class="portfolio-overlay">
																<a href="astottara.php" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="ashtottaras">Ashtottaras</a></h3>
															<span>Astottara, Sloka, Stotra etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="pandit-for-pooja">
																<img src="images/menu/Our-Pandits.jpg" alt="Our Pandits">
															</a>
															<div class="portfolio-overlay">
																<a href="pandit-for-pooja" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="pandit-for-pooja">Our Pandits</a></h3>
															<span>Veda, Smarta, Aagama Pandits</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="puja-stores">
																<img src="images/menu/Our-Stores.jpg" alt="Our Stores">
															</a>
															<div class="portfolio-overlay">
																<a href="puja-stores" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="puja-stores">Our Stores</a></h3>
															<span>Puja Samagri, Ratna Stores etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="hindu-gods-temples-live-darshanas">
																<img src="images/menu/Live-Darshan.jpg" alt="Live Darshan">
															</a>
															<div class="portfolio-overlay">
																<a href="hindu-gods-temples-live-darshanas" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="hindu-gods-temples-live-darshanas">Live Darshan</a></h3>
															<span>Shirdi, Sarangapur temple etc</span>
														</div>
													</article>
													<article class="portfolio-item pf-graphics pf-uielements">
														<div class="portfolio-image">
															<a href="all-hindu-gods-and-goddess-information">
																<img src="images/menu/Gods-Goddess-Info.jpg" alt="Gods & Goddess Info">
															</a>
															<div class="portfolio-overlay">
																<a href="all-hindu-gods-and-goddess-information" class="center-icon"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
														<div class="portfolio-desc">
															<h3><a href="all-hindu-gods-and-goddess-information">Gods & Goddess Info</a></h3>
															<span>God name, Arcana, flower etc</span>
														</div>
													</article>

												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="/blog"><div>Blog</div></a></li>
							<li class="mega-menu"><a href="pandit-service-providers-in-hyderabad"><div>Contact</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li>
											<div class="widget visible-lg visible-md clearfix">

												<h4>Our Location</h4>

												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7610.372426443618!2d78.3522200164035!3d17.4986221539473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1488373052d80f2e!2sPandit+Services+%7C+Online+Pandit+Service+Providers+%7C+Muhurtham+Fixing+%7C+Book+a+Pandit+for+Pooja!5e0!3m2!1sen!2sin!4v1463545740246" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

											</div>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-6">
										<li>
											<div class="widget clearfix">

												<h4>Send us a Quick Email</h4>

												<div class="contact-widget" data-loader="button">
													<div class="contact-form-result"></div>

													<form class="nobottommargin" name="template-contactform" action="include/sendemail.php" method="post">

														<div class="col_half">
															<div class="col_full">
																<input type="text" name="template-contactform-name" value="" class="form-control required" placeholder="Name" />
															</div>
															<div class="col_full">
																<input type="email" name="template-contactform-email" value="" class="required email form-control" placeholder="Email" />
															</div>
															<div class="col_full nobottommargin">
																<input type="text" name="template-contactform-phone" value="" class="form-control" placeholder="Phone" />
															</div>
														</div>

														<div class="col_half col_last">
															<div class="col_full">
																<input type="text" name="template-contactform-subject" value="" class="required form-control" placeholder="Subject" />
															</div>
															<textarea class="required form-control" name="template-contactform-message" rows="4" cols="30" placeholder="Enter your Message"></textarea>
														</div>

														<div class="clear"></div>

														<div class="col_full hidden">
															<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
														</div>

														<div class="col_full">
															<button class="button button-3d button-small nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
														</div>

													</form>
												</div>

											</div>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li>
											<div class="widget clearfix">

												<h4>Our Office</h4>

												<address>
													<strong>Address:</strong><br>
													#205, Saluva Block<br>
													RV Avaneendra, Pragathi Enclave<br>
													Miyapur, Hyderabad-49<br>
												</address>
												<abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:+919908234595"> (91) 9908234595</a><br>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="tel:+919908333463">(91) 9908333463</a><br>
												<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:ask@poojalu.com?Subject=Enquiry for Pooja" target="_top"> ask@poojalu.com</a>

												<div class="bottommargin-sm"></div>

												<a href="https://www.facebook.com/bookpoojari?ref=hl" class="social-icon si-small si-colored si-facebook" target="_blank" title="Facebook">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="https://twitter.com/panditforpooja" class="social-icon si-small si-colored si-twitter"  target="_blank" title="Twitter">
													<i class="icon-twitter"></i>
													<i class="icon-twitter"></i>
												</a>
												<a href="https://plus.google.com/+PoojaluServices/posts" class="social-icon si-small si-colored si-gplus"  target="_blank" title="gplus">
													<i class="icon-gplus"></i>
													<i class="icon-gplus"></i>
												</a>
												<a href="https://www.youtube.com/user/bookpooja" class="social-icon si-small si-colored si-youtube"  target="_blank" title="youtube">
													<i class="icon-youtube"></i>
													<i class="icon-youtube"></i>
												</a>

											</div>
										</li>
									</ul>
								</div>
							</li>
							
							<li class="mega-menu current"><a href="book-pandit.php"><div>Book Pandit</div></a>
							
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger" class="animated infinite flash"><i class="icon-bullhorn"></i><span>4</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Special Offers</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price"> </span>
									<button class="button button-3d button-small nomargin fright" onclick="window.location.href='festival-feason-offers-for-poojas-havans'">View Offers</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		
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
	<style>
panel-trigger {float: left;}
@media(max-width:476px){#side-panel-trigger {
    left: 0px !important;
}}
	@media(max-width:991px){#side-panel-trigger {
    left: 40px !important; 
}}
</style>
	<!--Mobile Menu-->
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/marquee/Home-page-Lord-Ganesh-Marquee.jpg')">
<div class="bg-stripes" style="background:url('images/marquee/stripe.png') scroll;width: 100%;height: 100%;z-index: 10;position: absolute;top: 0;"></div>

							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp" style="font-size: 54px;">Pandit Service Providers</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Pandit Services.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
 <div class="col_full bottommargin-lg common-height">

					<div class="col-md-3 dark col-padding ohidden" style="height: 356px; background-color: rgb(26, 188, 156);">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Griha Pravesh</h3>
							<p style="line-height: 1.8;">Book Pandit for this festive season to perform House Warming Ceremony or Griha Pravesh Puja. We provide assured Service for you with quality &amp; dedication. It Includes Following Things.</p>
							<a href="griha-pravesh-puja" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-pandit-house bgicon"></i>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden" style="height: 356px; background-color: rgb(52, 73, 94);">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Satyadeva Puja</h3>
							<p style="line-height: 1.8;">We perform Sri Satyanarayana Swamy Vratam Puja of Lord Rama Sameta Satyanarayana at your home. We do Satyanarayana Vratam with Purusha Sukta samputita kalpokta Vidhana. This Puja is to Fulfill your wishes. </p>
							<a href="satyanarayana-vratam-pooja" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-pandit-namaskar bgicon"></i>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden" style="height: 356px; background-color: rgb(231, 76, 60);">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Ganapati Havan</h3>
							<p style="line-height: 1.8;">We provide a facility of Book Pandit to perform Lakshmi Ganapathi Havan at your place (Home, office, temple, etc.,) at right time (We will fix the date & time according to your nakshatra on an auspicious day).</p>
							<a href="lakshmi-ganapathi-havan" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-pandit-havan bgicon"></i>
						</div>
					</div>
					<div class="col-md-3 dark col-padding ohidden" style="height: 356px; background-color: rgb(110, 76, 60);">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Varalakshmi Puja</h3>
							<p style="line-height: 1.8;">Praying  to varalakshmi is equivalent to worshiping the Ashta Lakshmis. Improves wealth, earth, learning, love, fame, peace, pleasure, and strength. Righteousness, desire, wealth and liberation from life.</p>
							<a href="varalakshmi-vratam" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-pandit-kalash bgicon"></i>
						</div>
					</div>

					<div class="clear"></div>

				</div>
				<div class="container clearfix">

					<div class="heading-block center nobottomborder bottommargin-lg">
						<h1>New York based Creative Agency</h1>
						<span>Specializes in creating Brand Identity for emerging Startups</span>
					</div>

					<div class="col_one_third nobottommargin">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Why choose <span>Us</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third nobottommargin">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Our <span>Mission</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third nobottommargin col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>What we <span>Do</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="clear"></div>
				</div>
				
<div class="promo  promo-center bottommargin">
						<h3>Call us today at <span>+91.9908.234595</span> or Email us at <span>ask@poojalu.com</span></h3>
						<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
						<a href="book-pandit" class="button button-xlarge button-rounded">Book a Pandit</a>
					</div>
                    
				<div class="section nobottommargin">
					<div class="container clear-bottommargin clearfix">

						<!-- Content
		============================================= -->
			<div class="topmargin-sm bottommargin ">
<div class="heading-block center">
							<h2>Even more Feature Rich</h2>
							<span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span>
						</div>
				<div class="container clearfix">

					<div id="processTabs">
						<ul class="process-steps bottommargin clearfix">
							<li>
								<a href="#ptab1" class="i-circled i-bordered i-alt divcenter"><i class="icon-pandit-search"></i></a>
								<h5>Search Your Pooja</h5>
							</li>
							<li>
								<a href="#ptab2" class="i-circled i-bordered i-alt divcenter"><i class="icon-pandit-select"></i></a>
								<h5>Select & Provide details</h5>
							</li>
							<li>
								<a href="#ptab3" class="i-circled i-bordered i-alt divcenter"><i class="icon-pandit-muhurat"></i></a>
								<h5>Fix Muhurat / Time</h5>
							</li>
							<li>
								<a href="#ptab4" class="i-circled i-bordered i-alt divcenter"><i class="icon-pandit-1"></i></a>
								<h5>Get Puja Done</h5>
							</li>
						</ul>
						<div>
							<div id="ptab1">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, ipsa, fuga, modi, corporis maiores illum fugit ratione cumque dolores sint obcaecati quod temporibus. Expedita, sapiente, veritatis, impedit iusto labore sed itaque sunt fugiat non quis nihil hic quos necessitatibus officiis mollitia nesciunt neque! Minus, mollitia at iusto unde voluptate repudiandae.</p>

								<div class="table-responsive">

									<table class="table cart">
										<thead>
											<tr>
												<th class="cart-product-remove">&nbsp;</th>
												<th class="cart-product-thumbnail">&nbsp;</th>
												<th class="cart-product-name">Product</th>
												<th class="cart-product-price">Unit Price</th>
												<th class="cart-product-quantity">Quantity</th>
												<th class="cart-product-subtotal">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr class="cart_item">
												<td class="cart-product-remove">
													<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
												</td>

												<td class="cart-product-thumbnail">
													<a href="#"><img width="64" height="64" src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress"></a>
												</td>

												<td class="cart-product-name">
													<a href="#">Pink Printed Dress</a>
												</td>

												<td class="cart-product-price">
													<span class="amount">$19.99</span>
												</td>

												<td class="cart-product-quantity">
													<div class="quantity clearfix">
														<input type="button" value="-" class="minus">
														<input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
														<input type="button" value="+" class="plus">
													</div>
												</td>

												<td class="cart-product-subtotal">
													<span class="amount">$19.99</span>
												</td>
											</tr>
											<tr class="cart_item">
												<td class="cart-product-remove">
													<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
												</td>

												<td class="cart-product-thumbnail">
													<a href="#"><img width="64" height="64" src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Pandit Services Shoes"></a>
												</td>

												<td class="cart-product-name">
													<a href="#">Checked Pandit Services Shoes</a>
												</td>

												<td class="cart-product-price">
													<span class="amount">$24.99</span>
												</td>

												<td class="cart-product-quantity">
													<div class="quantity clearfix">
														<input type="button" value="-" class="minus">
														<input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
														<input type="button" value="+" class="plus">
													</div>
												</td>

												<td class="cart-product-subtotal">
													<span class="amount">$24.99</span>
												</td>
											</tr>
										</tbody>

									</table>

								</div>

								<a href="#" class="button button-3d nomargin fright tab-linker" rel="2">Checkout &rArr;</a>

							</div>
							<div id="ptab2">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, deleniti, atque soluta ratione blanditiis maxime at architecto laudantium eius eaque distinctio dolorem voluptatem nam ab molestias velit nemo. Illo, hic.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, modi, odit, aspernatur veritatis ipsum molestiae impedit iusto blanditiis voluptatem ab voluptas ullam expedita repellendus porro assumenda non deserunt repellat eius rem dolorem corporis temporibus voluptatibus ut! Quod, corporis, tempora, dolore, sint earum minus deserunt eveniet natus error magnam aliquam nemo.</p>
								<div class="line"></div>
								<a href="#" class="button button-3d nomargin tab-linker" rel="1">Previous</a>
								<a href="#" class="button button-3d nomargin fright tab-linker" rel="3">Pay Now</a>
							</div>
							<div id="ptab3">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sit, culpa, placeat, tempora quibusdam molestiae cupiditate atque tempore nemo tenetur facere voluptates autem aliquid provident distinctio beatae odio maxime pariatur eos ratione quae itaque quod. Distinctio, temporibus, cupiditate, eaque vero illo molestiae vel doloremque dolorum repellat ullam possimus modi dicta eum debitis ratione est in sunt et corrupti adipisci quibusdam praesentium optio laborum tempora ipsam aut cum consectetur veritatis dolorem.</p>
								<div class="line"></div>
								<a href="#" class="button button-3d nomargin tab-linker" rel="2">Previous</a>
								<a href="#" class="button button-3d nomargin fright tab-linker" rel="4">Complete Order</a>
							</div>
							<div id="ptab4">
								<div class="alert alert-success">
									<strong>Thank You.</strong> Your order will be processed once we verify the Payment.
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

				</div>

			</div>


					</div>
				</div>

				<div class="container clearfix bottommargin">

					<div class="row topmargin-lg ">

						<div class="heading-block center">
							<h2>Our featured Puja Services</h2>
							<span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span>
						</div>
<?php //include("home-services1.php"); ?>
						

						

					</div>



		</section><!-- #content end -->

	</div>
	</div>
	<style>
panel-trigger {float: left;}
@media(max-width:476px){#side-panel-trigger {
    left: 0px !important;
}}
	@media(max-width:991px){#side-panel-trigger {
    left: 40px !important; 
}}
</style>
	<!--Mobile Menu-->
       
    </div>
</div>
<footer class="footer">
    
        	<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: url('images/footer-bg.jpg') repeat; background-size: cover;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix hidden-sm hidden-xs">

					<div class="col_two_third">

						<div class="widget clearfix">

							<img src="images/footer-widget-logo.png" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

							<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row">

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">FAQs</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="#">Shop</a></li>
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Events</a></li>
										<li><a href="#">Forums</a></li>
									</ul>
								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="#">Corporate</a></li>
										<li><a href="#">Agency</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Personal</a></li>
										<li><a href="#">One Page</a></li>
									</ul>
								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="#">Restaurant</a></li>
										<li><a href="#">Wedding</a></li>
										<li><a href="#">App Showcase</a></li>
										<li><a href="#">Magazine</a></li>
										<li><a href="#">Landing Page</a></li>
									</ul>
								</div>

							</div>

						</div>

					</div>
					<div class="col_one_third col_last">

					<div class="clearfix" style="padding: 10px 0; background: url('images/world-map.png') no-repeat center center;">
								<div class="col_half">
									<address class="nobottommargin">
										<abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarters:</strong></abbr><br>
										
										#205, Saluva Block<br>
										RV Avaneendra, Pragathi<br>
										Enclave, Miyapur-49<br>
									</address>
								</div>
								<div class="col_half col_last">
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> +91-9908234595<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91-9908333463<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> ask@poojalu.com
								</div>
							</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Pandit Services Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@Pandit Services.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Pandit ServicesOnSkype
					</div>

				</div>
			<!-- #copyrights end -->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	
		<script type="text/javascript" src="switcher/switcher.js"></script>
		
<div class="switcher clearfix"><div class="switcher-head"><div class="switcher-trigger color icon-pandit-2"></div><!--<span>భాషను మార్చుము<a href="about-me4d84.html?page-loader=1" class="button button-3d button-small norightmargin">తెలుగు </a></span>--></div>
<div class="switcher-body clearfix">

					<div class="nobottommargin center">
<span class="center "> Call us at <a href="tel:+919908234595">+91.9908.234595</a> or </span>
						<div class="col-md-4"><i class="icon-chat-3 color i-plain i-large inline-block"></i>
						<h4>Chat Offline</h4><p>Get live help & chat with  Pandit Services representative.</p></div>

						<div class="col-md-4"><a href="tel:+919908234595"><i class="icon-call color i-plain i-large inline-block"></i></a>
						<h4>Call</h4><p>Pandit Services can call you to discuss any questions you have.</p></div>

					<div class="col-md-4"><a href="mailto:ask@poojalu.com?Subject=Need%20Pandit%20for%20Pooja" target="_top"><i class="icon-line-mail color i-plain i-large inline-block"></i></a>
						<h4>Contact Us</h4><p>E-mail us with your comments, questions or feedback.</p>
					</div>
					</div>
					
				</div>


</div></div>
<style>
.switcher-trigger.icon-pandit-2:before {
    top: 12px;
    position: absolute;
    right: 15px;
}.switcher-body .col-md-4>h4 {
    margin-bottom: 10px;
}
.switcher-body span {
    display: block;
    margin: 0px 20px 20px;
    font-size: 20px;
}
.switcher{display:block;position:fixed;width:600px;background-color:#FFF;right:-260px;top:120px;z-index:99;color:#333;border:1px solid #DDD;border-right:0}.switcher strong{color:inherit}.switcher-head{position:relative;/*height:46px;*/line-height:46px;font-weight:600;font-size:18px;color:#333}.dark .switcher,.dark .switcher-head{color:#EEE}.switcher-head span{display:block;margin:0 20px;border-bottom:2px solid #EEE}.switcher-body{position:relative;padding:20px}.switcher-trigger{position:absolute;cursor:pointer;top:-1px;right:auto;left:-48px;width:48px;height:48px;font-size:20px;line-height:46px;text-align:center;background-color:#FFF;border:1px solid #DDD;border-right:0;border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;-webkit-border-radius:0 4px 4px 0}.switcher .line{margin:25px 0;border-color:#EEE}.dark .switcher,.dark .switcher-trigger{background-color:#222;border-color:rgba(255,255,255,.15)}.switcher-body h5{margin-bottom:10px}.switcher ul.switcher-op-selectors{margin:0 -6px -5px 0}ul.switcher-op-selectors li{list-style:none;float:right;width:20px;height:20px;margin:0 5px 5px 0;border-radius:2px;cursor:pointer}ul.switcher-op-selectors li img{display:block;width:20px;height:20px;border-radius:2px}@media only screen and (max-width:979px){#switcher-op-layout{display:none}}@media only screen and (max-width:767px){.switcher{display:none}}.dark .switcher-head span{border-bottom-color:rgba(255,255,255,.1)}.dark .switcher .line{border-color:rgba(255,255,255,.1)}.preview-pagetransition{background-color:#EEE!important;color:#BBB!important;text-shadow:none!important;position:absolute;top:auto;bottom:20px;right:50%;margin-right:-102px;letter-spacing:0;font-family:Lato,Roboto,Helvetica,Arial,sans-serif;text-transform:none}.dark .preview-pagetransition{background-color:rgba(255,255,255,.2)!important;color:#EEE!important;text-shadow:rgba(0,0,0,.1)!important}


/*Sub Menu Styles */
@media(max-width:768px){.menu-title p{display:none !important}}
.menu-title p{display:inline;}
.menu-title p a {
    color: #fff;
}
</style>  
<script type="text/javascript">

		$(function() {
			$( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
			$( ".tab-linker" ).click(function() {
				$( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
				return false;
			});
		});
	</script>

		</footer><!-- #footer end -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
