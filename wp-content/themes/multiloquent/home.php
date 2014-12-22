<?php
/**
 * this is the template for the home page when its set to display blog posts
 * 
 * @package multiloquent\template_parts
 */
get_header();
if (have_posts()) {
    ?>
<div class="jumbotron">
    <div class="container">
        <header>
            <h1 class="article_title">Featured Posts</h1>
        </header>
    </div>
</div>
<?php
    echo multiloquent_paralax_slider();
    ?>
<p class="lead text-center">Recent Posts</p>
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
