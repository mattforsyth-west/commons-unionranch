<?php
/**
 * sidebar template part 
 * 
 * @package multiloquent\template_parts
 */

echo '<aside class="sidebar breadcrumb">';
echo '<div class="">';
get_search_form();
wp_nav_menu(array(
    'theme_location' => 'primary-menu'
));
if (is_active_sidebar(1)) {
    dynamic_sidebar(1);
}
/* recent posts. */
if (is_active_sidebar(4)) {
    dynamic_sidebar(4);
}
if (is_active_sidebar(5)) {
    dynamic_sidebar(5);
}
echo '</div>';
echo '</aside>';
