<?php
use kartik\social\GooglePlugin;
use kartik\social\FacebookPlugin;
use yii\helpers\Html;
use dosamigos\ckeditor\CKEditorInline;
use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Yii::$app->view->title =$model->puja_name;
//Yii::$app->view->registerMetaTag([ 'name' => 'title','content' => $model->meta_title]);
//Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => $model->meta_desc]);
//Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => $model->meta_keyword]);

//echo "<pre>"; print_r($model);
//echo "puja_name :" . $model->puja_name;
//echo "<br>";
//echo "price_without_material : " . $model->price_without_material;
//echo "<br>";
//echo "price_with_material : " . $model->price_with_material;
//echo "<br>";
//echo $model->image;
//echo "<br>";
foreach($model as $model)
{
   //echo $model->image;
?>


<section id="content">

			<div class="content-wrap nobottompadding">

				<div class="container clearfix">

					<div class="col_full">

						<div class="heading-block center nobottomborder">
							<h2><?php echo  $model->puja_name; ?></h2>
							<span>We provide <?php echo  $model->puja_name;; ?></span>
						</div>

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><?php echo $model->image; ?></a></div>
									<div class="slide"><a href="#"><img src="config/images/img.jpeg" alt="About Image"></a></div>
									<div class="slide"><a href="#"><img src="config/images/img.jpeg" alt="About Image"></a></div>
									<div class="slide"><a href="#"><img src="config/images/img.jpeg" alt="About Image"></a></div>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
<!--
					<div class="promo promo-light bottommargin">
						<h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@Pandit Services.com</span></h3>
						<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
						<a href="#" class="button button-xlarge button-rounded">Start Browsing</a>
					</div>-->
<div class="col_two_third">
<?php echo  $model->main_content; ?>
						<div class="fancy-title title-bottom-border">
							<h2>Project Info:</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, dolores, facere, corrupti delectus ex quidem adipisci tempore.</p>
						<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

									<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

									<blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>

									<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

									<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

<pre>
#header-inner {
	width: 940px;
	margin: 0 auto;
	padding-top: 40px;
}</pre>

									<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

									<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
									<!-- Post Single - Content End -->

									<!-- Tag Cloud
									============================================= -->
									<div class="tagcloud clearfix bottommargin">
										<a href="#">general</a>
										<a href="#">information</a>
										<a href="#">media</a>
										<a href="#">press</a>
										<a href="#">gallery</a>
										<a href="#">illustration</a>
									</div><!-- .tagcloud end -->

									<div class="clear"></div>
								</div>
					</div>

					
					<div class="col_one_third nobottommargin col_last">
						
						<div class="well topmargin ohidden">

							<h4>Opening Hours</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.</p>

							<ul class="iconlist nobottommargin">
								<li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
								<li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
								<li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
							</ul>

							<i class="icon-time bgicon"></i>

						</div> 

						<div id="tesimonials" class="widget clearfix">

								<h4 class="highlight-me">Testimonials</h4>
								<div class="fslider testimonial noborder nopadding noshadow" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testi-image">
													<a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
													<div class="testi-meta">
														Steve Jobs
														<span>Apple Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-image">
													<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
													<div class="testi-meta">
														Collis Ta'eed
														<span>Envato Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-image">
													<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
													<div class="testi-meta">
														John Doe
														<span>XYZ Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						<div class="clear"></div>


					</div>
				</div>

				

			</div>

		</section><!-- #content end -->

<?php } ?>

