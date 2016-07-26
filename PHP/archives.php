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
				<div class="st-content-inner entry-content">
                    <!-- extra div for emulating position:fixed of the menu -->
                    <?php include('includes/bottomf.php'); ?>
					<div class="po-portfolio-slider-profile white-content">


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
									<img class="logo"
									     src="theme/images/logo2.png"
									     alt="logo">
								</a>
							</div>
						</div>


						<div id="ededede"
						     class="po-section section-image section-background-image-parallax white-content start_fig_color"
						     data-center="background-position: 50% 0px;"
						     data-bottom-top="background-position: 50% 150px;"
						     data-top-bottom="background-position: 50% -150px;"
						     data-anchor-target="#ededede">
							<!--[if IE 8]><img class="section-bg-ie"
							                   src="images/1280-720.png"
							                   alt="background"><![endif]-->
							<div class="slider-image-inner-page">
								<div class="po-slider-bottom-button po-column" data-delay="2700"
								     data-animation="move-up-short">
									<i class="fa fa-angle-down site-show"></i>
								</div>
								<div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short">
									<h1 class="text-center">Archives</h1>
								</div>

							</div>

						</div>
					</div>

				</div>
				<div class="top-page-anchor">


					<div class="po-page po-blog">

						<article  class=" page type-page">
							<div class="entry-header po-page-header">
								<div class="container">
									<div class="row">
										<div class="col-sm-6">
											<h3 class="entry-title">Archives</h3>
										</div>
										<div class="col-sm-6 hidden-xs">
											<div class="text-right breadcrumbs">
												<div id="crumbs"><a href="#">Home</a> <span
														class="delim">&rsaquo;</span> <span
														class="current">Archives</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- .entry-header -->


							<div class="container page-padding po-container-section">
								<div class="row">

									<div class="po-column col-sm-9" data-delay="400" data-animation="fade-in">
										<div class="entry-content blog-content po-blog">
											<p>A page that shows an overview of all your activity.</p>

											<h4 class="archive-header">Last 10 posts</h4>
											<ul class="archive-list">
												<li><a href='saturdays-with-my-camera.php'>Saturdays
														with my camera</a></li>
												<li><a href='working-with-animals.php'>Working
														with animals</a></li>
												<li><a href='a-small-town-in-sicily.php'>A
														small town in Sicily</a></li>
												<li><a href='#'>London
														underground</a></li>
												<li><a href='#'>Another day another
														country</a></li>
												<li><a href='#'>Berries
														for breakfast</a></li>
												<li><a href='#'>Back to
														the wisdom</a></li>
												<li><a href='#'>A nice place in
														Spain</a></li>
												<li><a href='#'>Big kid mad
														city</a></li>
												<li><a href='#'>Having a
														break</a></li>
											</ul>

											<h4 class="archive-header">Archives by month</h4>
											<ul class="archive-list">
												<li><a href="#">September 2014</a>
												</li>
												<li><a href="#">August 2014</a></li>
												<li><a href="#">July 2014</a></li>
											</ul>

											<h4 class="archive-header">Archives by year</h4>
											<ul class="archive-list">
												<li><a href="#">2014</a></li>
											</ul>

											<h4 class="archive-header">Categories</h4>
											<ul class="archive-list">
												<li class="cat-item cat-item-17"><a
														href="#">Personal</a>
												</li>
												<li class="cat-item cat-item-3"><a
														href="#">Photography</a>
												</li>
												<li class="cat-item cat-item-19"><a
														href="#">Reading</a>
												</li>
												<li class="cat-item cat-item-20"><a
														href="#">Travel</a>
												</li>
												<li class="cat-item cat-item-21"><a
														href="#">Work</a>
												</li>

											</ul>
											<div class="clearfix"></div>
										</div>
										<!-- .entry-content -->
										<div class="page-comments po-blog">
											<div class="entry-content blog-content">

												<div id="comments" class="comments-area">

														<div id="respond" class="comment-respond">
															<h3 id="reply-title" class="comment-reply-title">Leave your
																comment

															</h3>
															<form action="#">
																<div
																	class="small_border"></div>
																<div class="comment-form-author blog-form"><input
																		id="author" name="author" type="text"
																		placeholder="Your name"  size="30"
																		aria-required='true'/></div>
																<div class="comment-form-email blog-form"><input
																		id="email" name="email" type="text"
																		placeholder="Your email (will not be published)"
																		 size="30" aria-required='true'/></div>
																<div class="comment-form-url blog-form"><input id="url"
																                                               name="url"
																                                               type="text"
																                                               placeholder="Website"

																                                               size="30"/>
																</div>
																<div class="comment-form-comment blog-form"><textarea
																		id="comment" name="comment" cols="100" rows="10"
																		tabindex="4"
																		placeholder="Enter your comment"></textarea>
																</div>
																<p class="form-submit"><input name="submit"
																                              type="submit"
																                              id="blog-form"
																                              class="submit"
																                              value="Post comment"/>

																</p></form>
														</div>
														<!-- #respond -->


												</div>
												<!-- #comments -->
											</div>
										</div>
									</div>
									<div class="po-column col-sm-3 po-blog" data-delay="400" data-animation="fade-in">
										<div id="secondary">
											<div id="primary-sidebar" class="primary-sidebar widget-area"
											     role="complementary">
												<ul>
												<li id="search-2" class="widget widget_search">
													<form role="search" method="get" class="search-sidebar"
													      action=index.php>
														<i class="fa fa-search search-icon-form-sidebar"></i>
														<input type="search" class="search-field-sidebar"
														       name="s">
													</form>
												</li>
												<li id="recent-posts-2" class="widget widget_recent_entries"><h4
														class="widgettitle">Recent Posts</h4>
													<ul>
														<li>
															<a href="saturdays-with-my-camera.php">Saturdays
																with my camera</a>
														</li>
														<li>
															<a href="working-with-animals.php">Working
																with animals</a>
														</li>
														<li>
															<a href="a-small-town-in-sicily.php">A
																small town in Sicily</a>
														</li>
														<li>
															<a href="#">London
																underground</a>
														</li>
														<li>
															<a href="#">Another day
																another country</a>
														</li>
													</ul>
												</li>
												<li id="categories-2" class="widget widget_categories"><h4
														class="widgettitle">Categories</h4>
													<ul>
														<li class="cat-item cat-item-17"><a
																href="#">Personal</a>
														</li>
														<li class="cat-item cat-item-3"><a
																href="#">Photography</a>
														</li>
														<li class="cat-item cat-item-19"><a
																href="#">Reading</a>
														</li>
														<li class="cat-item cat-item-20"><a
																href="#">Travel</a>
														</li>
														<li class="cat-item cat-item-21"><a
																href="#">Work</a>
														</li>
													</ul>
												</li>
												<li id="lip_most_loved_widget-2"
												    class="widget widget_lip_most_loved_widget"><h4 class="widgettitle">
														Most Loved</h4>
													<ul class="most-loved">
														<li class="loved-item"><a
																href="hanging-camera.php">Hanging
																Camera</a><br/>

															<div class="loved-count"><i class="fa fa-heart-o"></i>
																<span>17</span></div>
														</li>
														<li class="loved-item"><a
																href="biker-boy.php">Biker
																Boy</a><br/>

															<div class="loved-count"><i class="fa fa-heart-o"></i>
																<span>11</span></div>
														</li>
														<li class="loved-item"><a
																href="working-with-animals.php">Working
																with animals</a><br/>

															<div class="loved-count"><i class="fa fa-heart-o"></i>
																<span>11</span></div>
														</li>
													</ul>
												</li>
												<li id="archives-2" class="widget widget_archive"><h4
														class="widgettitle">Archives</h4>
													<ul>
														<li><a href="#">September
																2014</a></li>
														<li><a href="#">August
																2014</a></li>
														<li><a href="#">July 2014</a>
														</li>
													</ul>
												</li>
												<li id="calendar-2" class="widget widget_calendar">
													<div id="calendar_wrap">
														<table id="wp-calendar">
															<caption>June 2015</caption>
															<thead>
															<tr>
																<th scope="col" title="Monday">M</th>
																<th scope="col" title="Tuesday">T</th>
																<th scope="col" title="Wednesday">W</th>
																<th scope="col" title="Thursday">T</th>
																<th scope="col" title="Friday">F</th>
																<th scope="col" title="Saturday">S</th>
																<th scope="col" title="Sunday">S</th>
															</tr>
															</thead>

															<tfoot>
															<tr>
																<td colspan="3" id="prev"><a
																		href="#">&laquo;
																		Sep</a></td>
																<td class="pad">&nbsp;</td>
																<td colspan="3" id="next" class="pad">&nbsp;</td>
															</tr>
															</tfoot>

															<tbody>
															<tr>
																<td>1</td>
																<td>2</td>
																<td>3</td>
																<td>4</td>
																<td>5</td>
																<td>6</td>
																<td>7</td>
															</tr>
															<tr>
																<td>8</td>
																<td>9</td>
																<td>10</td>
																<td>11</td>
																<td>12</td>
																<td>13</td>
																<td>14</td>
															</tr>
															<tr>
																<td>15</td>
																<td>16</td>
																<td>17</td>
																<td>18</td>
																<td>19</td>
																<td>20</td>
																<td>21</td>
															</tr>
															<tr>
																<td>22</td>
																<td>23</td>
																<td id="today">24</td>
																<td>25</td>
																<td>26</td>
																<td>27</td>
																<td>28</td>
															</tr>
															<tr>
																<td>29</td>
																<td>30</td>
																<td class="pad" colspan="5">&nbsp;</td>
															</tr>
															</tbody>
														</table>
													</div>
												</li>
												<li id="tag_cloud-2" class="widget widget_tag_cloud"><h4
														class="widgettitle">Tags</h4>

													<div class="tagcloud"><a
															href="#"
															class='-24' title='1 topic'
															>Animals</a>
														<a href="#"
														   class='-30' title='1 topic'>Berries</a>
														<a href="#"
														   class='-29' title='1 topic'>Breakfast</a>
														<a href="#"
														   class='-22' title='2 topics'
														   >Camera</a>
														<a href="#"
														   class='-26' title='1 topic'>Italy</a>
														<a href="#"
														   class='-27' title='1 topic'>London</a>
														<a href="#"
														   class='-33' title='1 topic'>New
															York</a>
														<a href="#"
														   class='-17' title='2 topics'
														   >Personal</a>
														<a href="#"
														   class='-3' title='10 topics'
														   >Photography</a>
														<a href="#"
														   class='-19' title='1 topic'>Reading</a>
														<a href="#"
														   class='-34' title='1 topic'>San
															Francisco</a>
														<a href="#"
														   class='-32' title='1 topic'>Spain</a>
														<a href="#"
														   class='-20' title='5 topics'
														   >Travel</a>
														<a href="#"
														   class='-28' title='1 topic'>Underground</a>
														<a href="#"
														   class='-25' title='1 topic'>Videography</a>
														<a href="#"
														   class='-23' title='2 topics'
														   >Weekends</a>
														<a href="#"
														   class='-31' title='1 topic'>Wisdom</a>
														<a href="#"
														   class='-21' title='1 topic'>Work</a>
													</div>
												</li>
													</ul>
											</div>
											<!-- #primary-sidebar -->
										</div>
										<!-- #secondary -->
									</div>


								</div>
							</div>
						</article>
						<!-- #post-## -->


						<?php include( 'footer.php' ); ?>
					</div>


			</div>
			<!-- /st-content-inner -->
		</div>
		<!-- /st-content -->
	</div>
	<!-- /st-pusher -->
</div>
<!-- /st-container -->
</div>


<?php include('includes/scripts.php') ?>

</body>
</html>