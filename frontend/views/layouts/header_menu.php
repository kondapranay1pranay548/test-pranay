<?php


use yii\helpers\Html;

//echo "<pre>"; print_r($this_month);

?>
<!-- Header
                ============================================= -->
<header id="header" class="semi-transparent full-header">

    <div id="header-wrap">

        <div class="container clearfix">
            <div id="side-panel-trigger" class="side-panel-trigger hidden-md hidden-lg"><a href="#"><i class="icon-reorder"></i></a></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index" class="standard-logo" data-dark-logo="images/logo"><?php echo Html::img('@web/images/logo.png'); ?></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo"><img src="images/logo" alt="Pandit Services "></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-4 ">

                <ul class="hidden-sm ">
                    <li class=""><a href="<?php echo Yii::$app->params['mainLink']; ?>"><div>Home</div></a></li>
                    <li class="mega-menu"><a href="#"><div>Puja</div></a>
                        <div class="mega-menu-content style-2 clearfix">
                            <ul class="mega-menu-column col-md-2">
                                <li>
                                    <div class="widget clearfix">

                                        <h4>This Month Puja</h4>

                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="varalakshmi-vratam">
<?php echo $this_month->image; ?>
<!--                                                                                                                    <img class="image_fade" src="images/menu/Varalakshmi-Vratha-Pooja.jpg" alt="Varalakshmi Vratha Pooja"> -->
                                                </a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="<?php echo $this_month->puja_name; ?>"><?php echo $this_month->puja_name; ?></a></h3>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> <?php echo date("M-Y"); ?></li>
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
<?php foreach ($popular_pooja as $popular) { ?>
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="griha-pravesh-pooja" class="nobg"><?php echo $popular->image; ?>
    <!--                                                                                                                            <img class="img-circle" src="images/menu/Griha-Pravesh-Puja.jpg" alt="Griha Pravesh Puja"></a>-->
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="<?php echo Yii::$app->params['mainLink'].$popular->puja_name; ?>"><?php echo $popular->puja_name; ?></a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i><?php echo $popular->popular_text; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
<?php } ?>




                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-md-4">
                                <div  class="widget clearfix"><h4>Categories</h4></div>								<li>
                                    <div class="mega-menu-column col-md-6 noleftpadding norightpadding">
<?php foreach ($parent_service as $services) { ?>
                                            <ul>
                                                <li>	
<a href="<?php echo Yii::$app->params['mainLink'] . 'pooja-service/' . $services->puja_name; ?>"><?php echo $services->puja_name; ?></a>

                                            </ul>
<?php } ?>
                                    </div>
                                    <div class="mega-menu-column col-md-6 norightpadding">
                                        <ul>
                                            <?php foreach ($parent_services_second_men as $services) { ?> 
                                            <a href="<?php echo Yii::$app->params['mainLink'] . 'pooja-service/' . $services->puja_name; ?>"><?php echo $services->puja_name; ?></a>
                                            <?php } ?>
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
                                            <?php
                                            foreach ($remedialPujas as $remedial) {
                                                echo "<a href='#'>$remedial->puja_name</a>";
                                            }
                                            ?>

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
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>pandit-services-in-hyderabad">
                                                        <?php echo Html::img('@web/images/menu/Pooja-Services.jpg'); ?>
<!--                                                                                                                            <img src="images/menu/Pooja-Services.jpg" alt="Pooja Services">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>pandit-services-in-hyderabad" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>pandit-services-in-hyderabad">Pooja Services</a></h3>
                                                    <span><a href="<?php  echo Yii::$app->params['mainLink']; ?>pandit-services-in-hyderabad">Abhisheka Puja</a>, <a href="#">Havan Puja</a> etc</span>
                                                </div>
                                            </article>

                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astrology-services">
                                                        <?php echo Html::img('@web/images/menu/Astrology-Servies.jpg'); ?>  
<!--																<img src="images/menu/Astrology-Servies.jpg" alt="Astrology Services">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astrology-services" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astrology-services">Astrology Servies</a></h3>
                                                    <span>Kundali, Remedial Solutions etc ghg</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/muhurtam-fixing">
                                                        <?php echo Html::img('@web/images/menu/Muhurtam-Fixing.jpg'); ?>
<!--																<img src="images/menu/Muhurtam-Fixing.jpg" alt="Muhurtam Fixing">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/muhurtam-fixing" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/muhurtam-fixing">Muhurtam Fixing</a></h3>
                                                    <span>Tarabla, Chandrabala  etc</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="catering-services">
                                                        <?php echo Html::img('@web/images/menu/Catering-Services.jpg'); ?>
<!--																<img src="images/menu/Catering-Services.jpg" alt="Catering Services">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/catering-services" class="center-icon"><i class="icon-line-ellipsis"></i></a>
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
                                                        <?php echo Html::img('@web/images/menu/ePuja-Services.jpg'); ?>
<!--																<img src="images/menu/ePuja-Services.jpg" alt="ePuja Services">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/epuja-service" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/epuja-service">ePuja Services</a></h3>
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
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/list-of-pooja-and-havan-samagri">
                                                        <?php echo Html::img('@web/images/menu/Puja-Samagri-Lists.jpg'); ?>
<!--																<img src="images/menu/Puja-Samagri-Lists.jpg" alt="Puja Samagri Lists">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/list-of-pooja-and-havan-samagri" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/list-of-pooja-and-havan-samagri">Puja Samagri Lists</a></h3>
                                                    <span><a href="#">Puja Samagri</a>,<a href="#">Havan Samagri</a></span>
                                                </div>
                                            </article>

                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astothara">
                                                        <?php echo Html::img('@web/images/menu/Ashtottaras.jpg'); ?>
<!--																<img src="images/menu/Ashtottaras.jpg" alt="Ashtottaras">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astothara" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/astothara">Ashtottaras</a></h3>
                                                    <span>Astottara, Sloka, Stotra etc</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/our-pandits">
                                                        <?php echo Html::img('@web/images/menu/Our-Pandits.jpg'); ?>
<!--																<img src="images/menu/Our-Pandits.jpg" alt="Our Pandits">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/our-pandits" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="pandit-for-pooja">Our Pandits</a></h3>
                                                    <span>Veda, Smarta, Aagama Pandits</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/puja-stores">
                                                        <?php echo Html::img('@web/images/menu/Our-Stores.jpg'); ?>
<!--																<img src="images/menu/Our-Stores.jpg" alt="Our Stores">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/puja-stores" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/puja-stores">Our Stores</a></h3>
                                                    <span>Puja Samagri, Ratna Stores etc</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="hindu-gods-temples-live-darshanas">
                                                        <?php echo Html::img('@web/images/menu/Live-Darshan.jpg'); ?>
<!--																<img src="images/menu/Live-Darshan.jpg" alt="Live Darshan">-->
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/live-darshan" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?php  echo Yii::$app->params['mainLink']; ?>activity/live-darshan">Live Darshan</a></h3>
                                                    <span>Shirdi, Sarangapur temple etc</span>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                    <a href="all-hindu-gods-and-goddess-information">
                                                        <?php echo Html::img('@web/images/menu/Gods-Goddess-Info.jpg'); ?>
<!--																<img src="images/menu/Gods-Goddess-Info.jpg" alt="Gods & Goddess Info">-->
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
                    <li class="mega-menu"><a href="<?php  echo Yii::$app->params['mainLink']; ?>site/contact"><div>Contact</div></a></li>
<!--                    <li class="mega-menu"><a href="<?php  echo Yii::$app->params['mainLink']; ?>site/contact"><div>Contact</div></a>
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
                    </li>-->

                    <li class="mega-menu current"><a href="<?php echo Yii::$app->params['mainLink']; ?>book-now/custome-booking"><div>Book Pandit</div></a>

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
                            <button class="button button-3d button-small nomargin fright" onclick="window.location.href = 'festival-feason-offers-for-poojas-havans'">View Offers</button>
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