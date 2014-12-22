<?php

/**

 * The template for displaying Archive pages.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package duena

 */


get_header(); ?>

    <div class="col-md-8">
        <h1>Careers</h1>
    </div>
</div>
<div class="row">
	<div id="primary" class="col-md-8 <?php echo esc_attr( of_get_option('blog_sidebar_pos') ) ?>">

		<div id="content" class="site-content" role="main">

			<!--<header class="page-header">

				<h1 class="page-title">Careers</h1>

			</header>--><!-- .page-header -->

			<ul class="nav nav-tabs">
                <li class="active"><a href="#tab_a" data-toggle="tab">Open Positions</a></li>
                <li class=""><a href="#tab_b" data-toggle="tab">About WESTliving</a></li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active" id="tab_a">
                    <h2>Current Open Positions</h2>
                    <div class="table-responsive">
                        <table class="table table-hover sortable">
                            <thead>
                                <tr>
                                  <th>Position</th>
                                  <th>Property</th>
                                  <th>Location</th>
                                  <th>Posted</th>
                                </tr>
                              </thead>
                            <?php 
								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								$myjobs = new WP_Query(array(
                                    'post_type' => 'careers',
									'posts_per_page' => 10,
									'paged' => $paged
                                )); 
							?>
                            <?php while($myjobs->have_posts()) : $myjobs->the_post(); ?>
                            <tr>
                                <td><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></td>
                                <td><?php the_field('property'); ?></td>
                                <td><?php the_field('location'); ?></td>
                                <td><?php the_date(); ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                        <?php
							
							if ( $wp_query->max_num_pages > 1 ) {
								//get_template_part('post-formats/post-nav'); 
							}
						?>
                    </div>
                </div>
                <div class="tab-pane" id="tab_b">
                    <?php if(dynamic_sidebar('careers_overview_widget_area_2')) : else : endif; ?>
                </div>
            </div>
            
            <?php if(dynamic_sidebar('careers_overview_widget_area_1')) : else : endif; ?>

		</div><!-- #content -->

	</div><!-- #primary -->



<?php get_sidebar(); ?>
<script src="/wp-content/themes/duena/js/sorttable.js"></script>
<?php get_footer(); ?>