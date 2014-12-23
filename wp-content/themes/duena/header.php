<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package duena

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="format-detection" content="telephone=no" />

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if( '' != of_get_option('favicon') ){ ?>

<link rel="icon" href="<?php echo esc_url( of_get_option('favicon', "" ) ); ?>" type="image/x-icon" />

<?php } ?>

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<!--[if (gt IE 9)|!(IE)]>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>

<![endif]-->

<?php wp_head(); ?>
<script>window.jQuery || document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>

</head>



<body <?php body_class(); ?>>

<!-- Google Tag Manager Union Ranch -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5HLN35"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HLN35');</script>
<!-- End Google Tag Manager -->

<div id="subsite-global-header">
	<div class="container">
    	<div class="row">
            <div class="col-md-12" id="westliving-subsite-links">
		<a href="/request-info" class="btn" id="header-request-btn">Request More Information</a>
            </div>
        </div>
    </div>
</div>
<div class="page-wrapper">

	<?php do_action( 'before' ); ?>

	<header id="header" role="banner">

		<div class="container clearfix">

			<div class="logo">

			<?php if (( of_get_option('logo_type') == 'image_logo') && ( of_get_option('logo_url') != '')) { ?>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( of_get_option('logo_url') ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>

			<?php } else { ?>

				<?php if ( is_front_page() || is_home() || is_404() ) { ?>

					<h1 class="text-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php } else { ?>

					<h2 class="text-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>

				<?php } ?>

			<?php } ?>

				<p class="site-description"><?php bloginfo( 'description' ); ?></p>

			</div>

			<?php if ( of_get_option('g_search_box_id') == 'yes') { ?>  

	          <div id="top-search">

                    <!--<div class="header-phone">800.571.8039</div>-->
<div id="phone-resizer-wrapper" class="header-phone"><span>209-463-9100</span><span class="text-resizer-wrapper"><?php wpTextResizeControls(1); ?></span></div>
			
	            <form method="get" action="<?php echo home_url(); ?>/">

	              <input type="text" name="s"  class="input-search" /><input type="submit" value="" id="submit">

	            </form>

	          </div>  

	        <?php } ?>

	        <div class="clear"></div>

			<nav id="site-navigation" class="main-nav" role="navigation">

				<div class="navbar_inner">

				<?php 

					wp_nav_menu( array( 

						'container'       => 'ul', 

		                'menu_class'      => 'sf-menu', 

		                'menu_id'         => 'topnav',

		                'depth'           => 0,

		                'theme_location' => 'primary' 

					) ); 

				?>

				</div>

			</nav><!-- #site-navigation -->

		</div>

	</header><!-- #masthead -->
    

	<?php if( (is_front_page()) && (of_get_option('sl_show') != 'no') ) { ?>

	<section id="slider-wrapper">

		<div class="container">

	    	<?php get_template_part( 'slider' ); ?>

		</div>

	</section><!--#slider--> 

<!--#cta-->
  	<?php } ?>

	<div id="main" class="site-main">

		<div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
        
          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        
        } ?>

			<div class="row">