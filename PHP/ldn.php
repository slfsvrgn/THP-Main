<!DOCTYPE html>

<html lang="en-GB" class="js no-touch skrollr skrollr-desktop"><!--<![endif]-->
<head>
    <?php include( 'includes/header.php' ); ?>
</head>

<body>

<div class="loading-nologo fa-spin"></div>
<div class="site-container">
    <div id="st-container" class="st-container">
        <?php include( 'includes/menu.php' ); ?>
		<!-- content push wrapper -->
		<!--[if !IE]><!-->
		<div class="st-pusher left">
			<!--<![endif]-->
			<!--[if IE]>
			<div class="st-pusher left st-pusher-ie"><![endif]-->
			<div class="st-content"><!-- this is the wrapper for the content -->
				<div class="st-content-inner entry-content"><!-- extra div for emulating position:fixed of the menu -->

					<div id="search-content" class="site-shade-content">
						<div class="site-shade-content-inner">
							<form role="search" method="get" class="search-form" action="#">
								<i class="fa fa-search search-icon-form"></i>
								<input type="search" class="search-field"  name="s" autofocus>
							</form>
						</div>
					</div>
					<div id="search-shade" class="site-shade"></div>

					<div id="share-content" class="share-links-site">
						<a class="mail" href="#"><i
								class="fa fa-envelope-o"></i></a>

						<a class="goog"
						   href="https://plus.google.com/share?url=index.php/portfolio/ldn/" onclick="window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
								class="fa fa-google-plus"></i></a>
						<a class="twit" href="https://twitter.com/share?url=index.php/portfolio/ldn/"
						   onclick="window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;"><i
								class="fa fa-twitter"></i></a>
						<a class="fb"
						   href="http://www.facebook.com/sharer.php?u=index.php/portfolio/ldn/"
						   onclick="window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i
								class="fa fa-facebook"></i></a>

						<div class="clear-float"></div>
					</div>
					<div id="share-shade" class="site-shade"></div>
					<div class="bottom-nav">

						<a class="bottom-logo-container" href="#">
							<img class="bottom-logo" src="theme/images/logo-dark1.png" alt="logo">
						</a>

						<div class="menu-bars-bottom st-trigger-effects">
							<div class="menu-close-dark"></div>
							<button type="button" id="menu-nav-footer" class="navbar-toggle button-menu"
							        data-effect="st-effect-4">
								<span class="icon-bar dark"></span>
								<span class="icon-bar dark"></span>
								<span class="icon-bar dark"></span>
							</button>
						</div>

						<div class="horiz-nav-bottom">
							<ul class="menu bottom-menu">
								<li class="menu-item search-prompt">Search</li>

								<li class="menu-item share-prompt">Share</li>

								<li class="menu-item top-ani">Top</li>
								<li class="footer-show menu-item">Footer
									<i class="footer-show-arrow fa fa-chevron-down" ></i>
								</li>

							</ul>
							<ul class="menu mobile-bottom-menu">
								<li class="menu-item search-prompt"><i class="fa fa-search"></i></li>

								<li class="menu-item share-prompt"><i class="fa fa-share-alt"></i></li>

								<li class="menu-item top-ani"><i class="fa fa-chevron-up"></i></li>
								<li class="footer-show menu-item">
									<i class="footer-show-arrow fa fa-chevron-down"></i>
								</li>
							</ul>
						</div>
					</div>
					<!-- .bottom-nav -->
					<div class="hidden-xs hidden-sm po-port-nav navigation-big-image">
						<a href="fresh-air.php" rel="next">
							<div class="arrow-next"></div>
							<h2 class="titlea">Fresh Air</h2></a>

						<div class="banner2"></div>
						<div class="next-b"></div>

						<a href="#" rel="prev">
							<div class="arrow"></div>
							<h2 class="titleb">Pigeons in Paris</h2></a>

						<div class="banner"></div>
						<div class="prev-b"></div>
					</div>


					<div class="row po-full-width">
						<div class="portfolio-page col-sm-12 column-12 white-content">


							<div class="po-column menu-bars st-trigger-effects" data-delay="2200"
							     data-animation="move-down-short">
								<div class="menu-close"></div>
								<button type="button" class="navbar-toggle button-menu" data-effect="st-effect-4">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
								<div class="top-logo-container">
									<a href="#">

										<img class="logo" src="theme/images/logo2.png" alt="logo">

									</a>
								</div>
							</div>


							<div class="share-links-container">
								<div class="container">
									<div class="row">

										<div class="col-sm-6 col-sm-offset-6 text-right share-port-ie white-content">
                                            <div class="share-links-standard">
                                                <ul>
                                                    <li><a href="#"><span class="next green"><i class="fa fa-envelope-o"></i></span></a></li>

                                                    <li><a href="#" onclick="window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="index goog"><i class="fa fa-google-plus"></i></span></a></li>
                                                    <li><a href="#" onclick="window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;"><span class="index twit"><i class="fa fa-twitter"></i></span></a></li>
                                                    <li><a href="#" onclick="window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><span class="index fb"><i class="fa fa-facebook"></i></span></a></li>
                                                    <li>
                                                        <div class="love green">
                                                            <div class="love-it-wrapper"><a href="#" class="love-it" data-post-id="273" data-user-id="0"><i class="fa fa-heart-o"></i></a> <span class="love-count">4</span></div>                        </div>
                                                    </li>
                                                </ul>
                                            </div>

										</div>
									</div>
								</div>
							</div>
							<div class="portfolio-info-top-standard">
								<div class="slider-image-inner-portfolio">
                                    <div class="po-column slider-caption-portfolio margin padding" data-delay="1700" data-animation="move-up-short">
										<h1 class="standard-header-portfolio">LDN</h1>

										<div class="sepline-port"></div>
										<div class="subtitle-port">Identity <span class="cat-sep"></span> Photography
											<span class="cat-sep"></span> Strategy
										</div>

										<div class="port-details hidden-md hidden-lg">
											<a href="fresh-air.php" rel="next">
												<div class="nav-portfolio-item nav-portfolio-item-2"
												     >
													<div class="next-portfolio-item"><h5
															class="next-portfolio-item-text-2">Fresh Air</h5></div>
												</div>
											</a>
											<a href="portfolio.php"><i class="fa fa-folder-open-o port-back"></i></a>
											<a href="#"
											   rel="prev">
												<div class="nav-portfolio-item nav-portfolio-item-2 mleft20">

													<div class="prev-portfolio-item"><h5
															class="prev-portfolio-item-text-2">Pigeons in Paris</h5>
													</div>
													<div class="clearfix"></div>

												</div>
											</a></div>

									</div>
								</div>
							</div>


							<div class="liquid-container-page">
								<a href="portfolio.php"><img width="1500" height="844"
								                             src="images/1500-844.png"
								                             class=" wp-post-image" alt="ldn_mini"/></a>

							</div>

						</div>
					</div>


					<div class="arrow-container">
						<div class="arrow-container-inner">
							<div class="transparent-triangle-container">
								<table >
									<tr>
										<td class="transparent-triangle-left-white grey-background"></td>
										<td class="transparent-triangle-left-triangle-container">
											<div class="transparent-triangle-left-triangle left-triangle-border"></div>
										</td>
										<td class="transparent-triangle-right-triangle-container">
											<div class="transparent-triangle-right-triangle dark-backgroud-border-right"></div>
										</td>
										<td class="transparent-triangle-right-white grey-background"></td>
									</tr>
								</table>
								<div class="transparent-triangle-container-bottom-white"></div>
							</div>
						</div>
					</div>

					<div class="entry-content">
						<div class="po-section section-background-light"
						      >
							<div class="ss-style-triangles" ></div>
							<div class="container">
								<div class="row">
									<div class="po-column col-sm-4 col-sm-offset-0 paddingTop"
									      data-animation="fade-in">
										<div class="padding po-column po-header-top col-sm-12" data-delay="0" 										     data-animation="fade-in"><h3
												class="text-center standard-header"
												>
												Client </h3>

											<div class="header-line margin_padding_default"></div>
										</div>
										<div class="clearfix"></div>
										<p class="textblock textblock-left">
											In gravida lectus consectetur, scelerisque turpis nec, tempor mi. In hac
											habitasse platea dictumst. Donec nunc massa, dictum a porttitor sit amet,
											aliquam et mi. Pellentesque adipiscing convallis lacus eget scelerisque.
											Fusce rhoncus libero sed mi ultrices, vitae tempus arcu auctor. </p>
									</div>
									<div class="po-column col-sm-4 col-sm-offset-0 paddingTop"
									      data-animation="fade-in">
										<div class="padding po-column po-header-top col-sm-12" data-delay="0" 										     data-animation="fade-in"><h3
												class="text-center standard-header"
												>
												Solution </h3>

											<div class="header-line margin_padding_default"></div>
										</div>
										<div class="clearfix"></div>
										<p class="textblock textblock-left">
											Donec nunc massa, dictum a porttitor sit amet, aliquam et mi. Pellentesque
											adipiscing convallis lacus eget scelerisque. Fusce rhoncus libero sed mi
											ultrices, vitae tempus arcu auctor. Pellentesque adipiscing convallis lacus
											eget scelerisque. </p>
									</div>
									<div class="po-column col-sm-4 col-sm-offset-0 paddingTop"
									      data-animation="fade-in">
										<div class="padding po-column po-header-top col-sm-12" data-delay="0" 										     data-animation="fade-in"><h3
												class="text-center standard-header"
												>
												Expertise </h3>

											<div class="header-line margin_padding_default"></div>
										</div>
										<div class="clearfix"></div>
										<div class="parent">
											<div class="row">
												<div class="col-xs-10"><i class="fa li_camera"
												                         ></i>
													<h6 class="progress-title">
														Photography</h6>

													<div class="clear-float"></div>
												</div>
												<div class="col-xs-2">
													<div class="progress-value text-right"
													     >
														75%
													</div>
												</div>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar"  data-progress="75"></div>
											</div>
										</div>
										<div class="parent">
											<div class="row">
												<div class="col-xs-10"><i class="fa li_location"
												                         ></i>
													<h6 class="progress-title">
														Location Scouting</h6>

													<div class="clear-float"></div>
												</div>
												<div class="col-xs-2">
													<div class="progress-value text-right"
													     >
														60%
													</div>
												</div>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar"  data-progress="60"></div>
											</div>
										</div>
										<div class="parent">
											<div class="row">
												<div class="col-xs-10"><i class="fa li_pen"
												                         ></i>
													<h6 class="progress-title">
														Photoshop</h6>

													<div class="clear-float"></div>
												</div>
												<div class="col-xs-2">
													<div class="progress-value text-right"
													     >
														20%
													</div>
												</div>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar"  data-progress="20"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="numbers" class="po-section section-background-dark"
						      >
							<div class="ss-style-triangles grey-background"></div>
							<div class="container">
								<div class="row">
									<div class="po-column col-sm-8 col-sm-offset-2"

									     data-delay="400" data-animation="move-up-short">
										<div class="padding po-column po-header-top col-sm-12" data-delay="0" 										     data-animation="fade-in"><h3
												class="text-center standard-header"
												>
												Project numbers</h3>

											<div class="header-line paddingBott"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="po-column col-sm-3 col-sm-offset-0"

									     data-delay="0" data-animation="fade-in">
										<div class="po-count">
											<div class="po-column count-icon col-sm-12" data-delay="0"
											     data-animation="pull-up">
												<div class="icon-boxless icon-boxless-green"><i
														class="fa  li_clock fa-2x"></i></div>
											</div>
											<div class="po-number text-center" data-from="0" data-to="608"
											     data-speed="1000" data-refresh-interval="10"></div>
											<div class="po-column po-column-mobile po-header-small col-sm-12"
											     data-delay="1000" data-animation="move-up-short"><h6
													class="count-text text-center"> Hours on location </h6></div>
										</div>
									</div>
									<div class="po-column col-sm-3 col-sm-offset-0"

									     data-delay="0" data-animation="fade-in">
										<div class="po-count">
											<div class="po-column count-icon col-sm-12" data-delay="400"
											     data-animation="pull-up">
												<div class="icon-boxless icon-boxless-green"><i
														class="fa li_cup fa-2x"></i></div>
											</div>
											<div class="po-number text-center" data-from="0" data-to="103"
											     data-speed="1400" data-refresh-interval="10"></div>
											<div class="po-column po-column-mobile po-header-small col-sm-12"
											     data-delay="1400" data-animation="move-up-short"><h6
													class="count-text text-center">
													Cups of green tea consumed<br/>
												</h6></div>
										</div>
									</div>
									<div class="po-column col-sm-3 col-sm-offset-0"

									     data-delay="0" data-animation="fade-in">
										<div class="po-count">
											<div class="po-column count-icon col-sm-12" data-delay="800"
											     data-animation="pull-up">
												<div class="icon-boxless icon-boxless-green"><i
														class="fa  li_camera fa-2x"></i></div>
											</div>
											<div class="po-number text-center" data-from="0" data-to="2003"
											     data-speed="1800" data-refresh-interval="10"></div>
											<div class="po-column po-column-mobile po-header-small col-sm-12"
											     data-delay="1800" data-animation="move-up-short"><h6
													class="count-text text-center">
													Photographs taken<br/>
												</h6></div>
										</div>
									</div>
									<div class="po-column col-sm-3 col-sm-offset-0"

									     data-delay="0" data-animation="fade-in">
										<div class="po-count">
											<div class="po-column count-icon col-sm-12" data-delay="1200"
											     data-animation="pull-up">
												<div class="icon-boxless icon-boxless-green"><i
														class="fa li_location fa-2x"></i></div>
											</div>
											<div class="po-number text-center" data-from="0" data-to="43"
											     data-speed="2200" data-refresh-interval="10"></div>
											<div class="po-column po-column-mobile po-header-small col-sm-12"
											     data-delay="2200" data-animation="move-up-short"><h6
													class="count-text text-center">
													locations covered<br/>
												</h6></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- .entry-content -->

					<div class="clearfix"></div>


					<div class="section-background-white padding_related">
						<div class="po-column po-header-top col-sm-12 padding" data-delay="0" data-animation="fade-in" ><h3 class="text-center standard-header"
						                            >
								Related projects</h3>

							<div class="header-line padBottomXL"></div>
						</div>
						<div class="clearfix"></div>
						<div class="portfolio-item-effect-2">
							<div class="grid">
								<a class="po-column col-sm-4 port-cont no-padding-port"
								   href="raging-buffalo.php" data-delay="0" data-animation="fade-in-port"
								   >
									<figure class="effect-chico">

										<div class="port-img port-img-squared bull_mini_fig"></div>

										<figcaption>
											<h2>Raging Buffalo</h2>
										</figcaption>
									</figure>
								</a>


								<a class="po-column col-sm-4 port-cont no-padding-port"
								   href="happy.php"
								   data-animation="fade-in-port" >
									<figure class="effect-chico">

										<div class="port-img port-img-squared wisdom_fig"></div>

										<figcaption>
											<h2>Happy</h2>
										</figcaption>
									</figure>
								</a>


								<a class="po-column col-sm-4 port-cont no-padding-port"
								   href="fresh-air.php"
								   data-animation="fade-in-port" >
									<figure class="effect-chico">

										<div class="port-img port-img-rectangle end_fig"></div>

										<figcaption>
											<h2>Fresh Air</h2>
										</figcaption>
									</figure>
								</a>

							</div>
						</div>
					</div>
					<div class="clear-float">


						<div class="footer_call">


						</div>


<?php include('footer.php'); ?>
					</div>
				</div>

			</div>
			<!-- /st-content-inner -->
		</div>
		<!-- /st-content -->
	</div>
	<!-- /st-pusher -->
</div>
<!-- /st-container -->


<?php include('includes/scripts.php') ?>
</body>
</html>

        