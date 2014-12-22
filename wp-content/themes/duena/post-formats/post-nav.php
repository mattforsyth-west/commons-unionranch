<?php if(!is_singular()) { ?>

  <?php if ( function_exists('duena_pagination') ) : ?>
  	<?php duena_pagination($wp_query->max_num_pages); ?>
  <?php else : ?>
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <ul class="pager">
        <li class="previous">
          <?php next_posts_link( __('&laquo; Older Entries', 'duena')) ?>
        </li><!--.older-->
        <li class="next">
          <?php previous_posts_link(__('Newer Entries &raquo;', 'duena')) ?>
        </li><!--.newer-->
      </ul><!--.oldernewer-->
    <?php endif; ?>
  <?php endif; ?>
<?php } else { ?>
<div class="single-post-nav">
    <?php previous_post_link('%link', '<span class="post-nav-arrows">&#8592;</span> %title', FALSE, '2 and 16 and 15'); ?>
    <?php next_post_link('%link', '%title <span class="post-nav-arrows">&#8594;</span>', FALSE, '2 and 16 and 15'); ?>
</div>
<?php } ?>
<!-- Posts navigation -->