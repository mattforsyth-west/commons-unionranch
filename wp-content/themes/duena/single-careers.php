<?php

/**

 * The Template for displaying all single jobs posts.

 *

 * @package duena

 */

$currentPageID = $post->ID;

get_header(); ?>

    <div class="col-md-8">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="row">
	<div id="primary" class="col-md-8 <?php echo esc_attr( of_get_option('blog_sidebar_pos') ) ?>">
		
        <?php $myjobs = new WP_Query(array(
				'post_type' => 'careers'
			)); ?>
        <?php while($myjobs->have_posts()) : $myjobs->the_post(); ?>
        <?php
		$myjobsPostID = get_the_ID();
		if($currentPageID == $myjobsPostID) { ?>
		<div id="content" class="site-content" role="main">
			<!--<h1><?php /*the_title();*/ ?></h1>-->
            <div class="careers-post-info">
            	<span class="careers-post-property"><?php the_field('property'); ?></span>
                <span class="careers-post-date">Posted: <?php the_date(); ?></span>
            </div>

			<?php the_content(); ?>
            <?php
            $buttonLinkURL = get_field('apply_button_url');
			if($buttonLinkURL != "") { ?>
            <a href="<?php the_field('apply_button_url'); ?>" target="_blank" class="btn btn-large">Apply Now</a>
			<?php } ?>
			<p>&nbsp;</p>
		</div><!-- #content -->
        <?php } ?>
        <?php endwhile; ?>

	</div><!-- #primary -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>