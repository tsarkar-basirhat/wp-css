<?php

/* Template Name: Home Page */

get_header();
?>

<section class="heroSlideWrap">
	<div class="container">
		<div class="heroSlide owl-carousel">
			<?php query_posts($args = array('post_type' => 'post', 'posts_per_page' => -1 )); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="item">
					<div class="row align-items-center">
						<div class="col-lg-6">
              <div class="slideImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide.jpg" alt=""></div>
						</div>
						<div class="col-lg-6">
							<div class="slideTxt">
								<h2><?php the_title(); ?></h2>
								<p><?php echo excerpt(15); ?></p>
								<div class="postMeta">
									<span><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('jS F, Y'); ?></span>
									|
									<span><i class="fa fa-user-o" aria-hidden="true"></i> <?php the_author(); ?></span>
								</div>
								<a class="rMore" href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="slideBar">
			<div class="topSlideState"><span></span></div>
			<div class="topSlideinf"></div>
		</div>
	</div>
</section>

<section class="feaTured main-content">
   <div class="container">
   	<div class="row">
   		<div class="col-lg-7">
   			<div class="featuredList">
					<h3><span>Featured List</span></h3>
					<?php query_posts($args = array('post_type' => 'post', 'posts_per_page' => -1 )); ?>
					<ul>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<div class="row align-items-center">
									<div class="col-lg-4">
			              <div class="featuredImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide.jpg" alt=""></div>
									</div>
									<div class="col-lg-8">
										<div class="featuredTxt">
											<h2><?php the_title(); ?></h2>
											<div class="postMeta">
												<span><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('jS F, Y'); ?></span>
												|
												<span><i class="fa fa-user-o" aria-hidden="true"></i> <?php the_author(); ?></span>
											</div>
											<a class="rMore" href="<?php the_permalink(); ?>">Read More</a>
										</div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
				  </ul>
					<?php wp_reset_query(); ?>
   			</div>
   		</div>
			<div class="col-lg-5">
				<div id="sidebar">
					<div class="sideBar sidebar__inner">
	          <h3>Categories</h3>
		        <ul class="cateLink">
							<?php
		             $categories = get_categories('exclude=1&title_li=');
		             foreach ($categories as $cat) {
								 $category_link = get_category_link($cat->cat_ID);
		             echo "<li><a href=\"".esc_url($category_link)."\" title=\"".$cat->cat_name."\">".$cat->cat_name."(".$cat->category_count.")</a></li>";
							  } ?>
		        </ul>
						<div class="addSec1"></div>
						<div class="addSec2">
							<div class="row">
								<div class="col-lg-6">
									<div class="addSec2-1"></div>
								</div>
								<div class="col-lg-6">
									<div class="addSec2-2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
   	</div>
   </div>
</section>


<section class="mostPopular">
  <div class="container">
		<h3>Most Popular</h3>
		<div class="mostPop owl-carousel">
			<?php query_posts($args = array('post_type' => 'post', 'posts_per_page' => -1 )); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="item">
					<div class="mostPopSingle">
						<div class="mostPopImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide.jpg" alt=""></div>
						<div class="mostPopTxt">
							<h2><?php the_title(); ?></h2>
							<div class="postMeta">
								<span><?php the_time('jS F, Y'); ?></span>
								-
								<span><?php the_author(); ?></span>
							</div>
							<a class="rMore" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
  </div>
</section>

<!-- <?php
while ( have_posts() ) :
	the_post();
	the_content();
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?> -->

<?php
get_footer();
