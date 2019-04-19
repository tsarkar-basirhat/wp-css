<?php

/* Template Name: Home Page */

get_header();
?>

<section class="">
	<div class="container">
		<div class="heroSlide owl-carousel">
			<?php query_posts($args = array('post_type' => 'post', 'posts_per_page' => 1 )); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="item">
					<div class="row">
						<div class="col-lg-6">

						</div>
						<div class="col-lg-6">
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
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
