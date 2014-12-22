<?php
/** 
 *  author pages template part.
 *  have an archive and a bio for the author
 *  
 *  @package multiloquent
 */
get_header();
if (have_posts()) {
    ?>
<div class="jumbotron">
    <div class="container">
        <header class="profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php the_author_meta('display_name'); ?></h2>
                    <p><strong>Website: </strong> <?php the_author_link();?> </p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <?php echo get_avatar(get_the_author_meta('ID'));?>
                        <figcaption class="ratings">
                            <p>Post count: <?php echo $wp_query->found_posts;?></p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider">
            <div class="col-xs-12">
          <?php
    $description = get_the_author_meta('description');
    if (! empty($description)) {
        echo '<p>' . $description . '</p>';
    }
       ?>
       </div>
            </div>   
        </header>
    </div>
</div>
<section class="container post">
	<?php
    $colour = multiloquent_get_random_blue_class();
    while (have_posts()) {
        the_post();
        multiloquent_render_the_archive($colour);
    }
    ?>
</section>
<section class="container post">
	<?php get_template_part('advert');?>
</section>
<div class="container post">
    <nav class="navitems text-center">
        <ul class="pagination">
            <li><?php previous_posts_link('Previous Entries') ?></li>
            <li><?php next_posts_link('Next Entries') ?></li>
        </ul>
    </nav>
</div>
<?php } else { ?>
<div class="container post"> 
		<?php  get_template_part('error-snippet');?>
</div>
<?php
}
get_footer();
