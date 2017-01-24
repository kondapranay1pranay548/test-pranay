<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "<pre>"; print_r($model);
?>
<section id="page-title" class="page-title-pattern page-title-center">

			<div class="container clearfix">
				<h1>Page Title with Pattern</h1>
				<span>A Short Page Title Tagline</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Page Titles</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		
		<!-- Page Sub Menu
		============================================= -->
<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Call us today at <span>+91.22.57412541</span> or Email us at <span>support@Pandit Services.com</span></div>

					<nav>
						<ul>
							<li><a href="#" class="button button-xlarge">Start Now</a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div>

<section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap">
<div class="nobg section notopborder nomargin header-stick">
        <div class="container clearfix">

                <div class="heading-block ">
                        <h2>Live Darshanam</h2>
                        <span>This is the Sub Title of the Heading Block</span>
                </div>

                <p>Millennium Development Goals, The Elders crisis situation cross-cultural time of extraordinary change minority. Long-term progress, humanitarian medicine capacity building free expression innovate. Natural resources criteria respect planned giving small-scale farmers.</p>

        </div>
</div>
        <div class="container clearfix">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
              </colgroup>
              <thead>
                    <tr>
                      <th>Temple Name</th>
                      <th>Live Darshan Link</th>
                    </tr>
              </thead>
              <tbody>
                  <?php foreach($model as $details)  { ?>
                    <tr>
                      <td>
                            <?php echo $details->name; ?>
                      </td>
                      <td>
                      <a target="_blank" href="<?php echo $details->link; ?>" alt="Siddhivinayak Temple Live Darshan "> Click here for Siddhivinayak Live Darshan</a>
                      </td>
                    </tr>
                    <?php } ?>
                    							
              </tbody>
            </table>
        </div>


        </div>
				</div>
</section>