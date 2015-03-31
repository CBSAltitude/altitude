<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all" role="main">
							
							<section class="lead">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<!-- Nothing here Yet -->
								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
							</section><?php //End .Lead Section ?>
							
							<section class="fresh-content">
								<?php $fresh = new WP_Query('posts_per_page=2'); 
									if($fresh->have_posts()) : while($fresh ->have_posts()) : $fresh ->the_post();
								?>
								<?php include('library/includes/post-stub.php');?>
							
								<?php endwhile;?>
							
								<?php else : include('library/includes/not-found.php');?>

								<?php endif; ?>
					
							<?php 
								$args = array(
												'posts_per_page' => 1,
							                	'category_name' => 'marketing-masters',
											);
								$masters = new WP_Query($args);?>
							<?php if($masters->have_posts()) : while($masters -> have_posts()) : $masters -> the_post();?>
								<?php
									//Get Marketing Masters Data --
									 $mm_color = get_field('_mm_color');
									 if(get_field('_mm_image') != ''){
									 	$mm_img = get_field('_mm_image');
									 }else{$mm_img = get_field('_mm_sidebar_image');}
									 $mm_company = get_field('_mm_company');
									 $mm_master_name = get_field('_mm_name');
									 ?>
								<article class="marketing-masters-lead <?php echo $mm_color ?>">
									<header>
										<h1 class="image-replacement">Marketing Masters</h1>
										<h2>Behind Every Campaign <span>Is An Even Better Story.</span></h2>
										<h3><?php echo $mm_company; ?></h3>
									</header>
									<a class="button" href="<?php echo home_url(); ?>/marketing-masters/">Watch Now</a>
									<img src="<?php echo $mm_img; ?>" alt="<?php echo $mm_master_name;?>"/>
								</article><!-- end .marketing-masters-lead -->
								<?php endwhile; ?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif; wp_reset_query(); ?>
								<aside class="social-media-widget">
									<section class="twitter-feed">
										<h1>Latest Tweets</h1>
										<!-- Twitter Goes Here -->
									</section><!-- end .twitter-feed -->
									<section class="follow-us">
										<h1>Follow Us</h1>
										<!-- Social Media Links go here -->
									</section><!-- end .follow-us -->
								</aside>
							</section><!-- end .fresh-contnet -->
							
							<section class="about">
								<?php $about = new WP_Query('name=about');?>
								<?php if($about->have_posts()) : while($about->have_posts()) : $about->the_post();?>
								<?php 
									// get About data
									if(get_field('_a_headline') != '' && get_field('_a_headline') != null){
										$a_headline = get_field('_a_headline');
									}else{
										$a_headline = get_the_title();
									}
									$a_blurb = get_field('_a_blurb');
									$a_strategy_image = get_field('_a_strategy_img');
									$a_strategy_blurb = get_field('_a_strategy_blurb');
									$a_strategy_quote = get_field('_a_strategy_quote');
									$a_strategy_quoter = get_field('_a_strategy_quoter');
									$a_creative_image = get_field('_a_creative_img');
									$a_creative_blurb = get_field('_a_creative_blurb');
									$a_creative_quote = get_field('_a_creative_quote');
									$a_creative_quoter = get_field('_a_creative_quoter');
									$a_activation_image = get_field('_a_activation_img');
									$a_activation_blurb = get_field('_a_activation_blurb');
									$a_activation_quote = get_field('_a_activation_quote');
									$a_activation_quoter = get_field('_a_activation_quoter');
											
								?>
								<h1>
									<?php echo $a_headline; ?>
								</h1>
								<p><?php the_content();?></p>
								<section class="what-we-do">
									<h1>Strategize. Create. Activate. Evolve.</h1>
									<p><?php echo $a_blurb; ?></p>
									
									<section class="department strategy">
										<img src="<?php echo $a_strategy_image;?>" alt="strategy" />
										<p><?php echo $a_strategy_blurb;?></p>
										<blockquote>
											<?php echo $a_strategy_quote;?>
											<footer>
												<?php echo $a_strategy_quoter;?>
											</footer>
										</blockquote>
									</section><!-- end .department strategy -->
								
									<section class="department creative">
											<img src="<?php echo $a_creative_image;?>" alt="creative" />
											<p><?php echo $a_creative_blurb;?></p>
											<blockquote>
												<?php echo $a_creative_quote;?>
												<footer>
													<?php echo $a_creative_quoter;?>
												</footer>
											</blockquote>
									</section><!-- end .department creative -->
									
									<section class="department activation">
										<img src="<?php echo $a_activation_image;?>" alt="activation" />
										<p><?php echo $a_activation_blurb;?></p>
										<blockquote>
											<?php echo $a_activation_quote;?>
											<footer>
												<?php echo $a_activation_quoter;?>
											</footer>
										</blockquote>
									</section><!-- end .department activation -->
									
								</section><!-- end .what-we-do -->
								
								<?php endwhile;?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif; ?>
							</section><!-- end .about -->
							
							<section class="cases">
								<?php $cases = new WP_Query('name=cases');?>
								<?php if($cases->have_posts()) : while($cases ->have_posts()) : $cases -> the_post();?>
								<?php 
									$cases_subhead = get_field('_cases_subhead');
									
									?>
								<header>
									<h1><?php the_title(); ?></h1>
									<h2><?php echo $cases_subhead;?></h2>
								</header>
								<?php endwhile;?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif;?>
								
								
								<?php $case = new WP_Query('post_type=case');?>
								<?php if($case->have_posts()) : while($case ->have_posts()) : $case -> the_post();?>
								<?php $case_logo = get_field('_case_logo');?>
								<article class="<?php post_class('case');?>" id="post-<?php the_ID(); ?>">
									<a href="<?php the_permalink();?>" alt="<?php the_title();?>">
										<h1 class="case-logo ir <?php echo get_the_title();?>" style="background-image: url(<?php echo $case_logo;?>)"><?php the_title();?></h1>
									</a>
								</article><!-- end .case -->
								<?php endwhile;?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif;?>
							</section><!-- end .cases -->
							
							<section class="assets">
								<?php $assets = new WP_Query('name=assets'); ?>
								<?php if($assets -> have_posts()) : while($assets -> have_posts()) : $assets -> the_post();?>
								<?php
									
									$assets_subhead = get_field('_assets_subhead');
									
									 ?>
									<header>
										<h1><?php the_title();?></h1>
										<h2><?php echo $assets_subhead;?></h2>
									</header>
									
								<?php endwhile;?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif; ?>
								
								<article class="map">
									
								</article><!-- end .map -->
								
								
								
								<?php 
									$args = array(
										'post_type' => 'assets',
										'posts_per_page' => -1,
										'orderby' => 'date',
										'order' => 'ASC',	
									);
									$asset = new WP_Query($args); ?>
								<?php if($asset -> have_posts()) : while($asset -> have_posts()) : $asset -> the_post();?>
								<?php $asset_color = get_field('_asset_color');?>
								<article class="asset <?php get_the_title(); echo $asset_color;?>" >
									<h1><?php the_title();?></h1>
									<?php the_content();?>
									<img src="" />
									
									<?php
									 //Get subassets
										$subs = get_field('_asset_subs');
										
										foreach($subs as $sub){?>
											<div class="sub_asset" <?php echo $sub['_sub_asset_title'];?>>
												<?php if(($sub['_sub_asset_img'] != '') && ($sub['_sub_asset_img'] != null)){
													$has_image = 'ir';
													$background_image = 'style="background-image:url('.$sub['_sub_asset_img'].');"';
												}else{$has_image = ''; $background_image = '';} ?>
												<h2 class="<?php echo $has_image;?>" <?php echo $background_image;?>><?php echo $sub['_sub_asset_title'];?></h2>
												<p><?php echo $sub['_sub_asset_content'];?></p>
											</div><!-- end .sub_asset -->
										
									<?php }	?>
								</article>
								
								<?php endwhile;?>
								<?php else : include('library/includes/not-found.php');?>
								<?php endif;?>
							</section><!-- end .assets -->
										
						</div><!-- end #main -->


				</div><!-- end #inner-content -->

			</div><!-- end #content -->


<?php get_footer(); ?>
