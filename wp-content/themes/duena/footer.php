<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package duena
 */
?>
			</div>
		</div>
	</div><!-- #main -->

<?php if(is_front_page()): ?>
<div id="bottom-info-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                //echo '<h2>Recent News</h2>';
                //echo do_shortcode('[catlist id=3 numberposts=3 orderby=date order=desc date=no excerpt=yes excerpt_size=20]');
                echo do_shortcode('[widget id="text-24"]');
                ?>
            </div>
            <div class="col-md-4">
                <?php
                echo do_shortcode('[widget id="text-23"]');
                ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
<div class="row">
			<div class="col-md-3">
				<?php echo do_shortcode('[widget id="text-14"]'); ?>
            </div>
            <div class="col-md-3">
				<?php echo do_shortcode('[widget id="text-16"]'); ?>
			</div>
            <div class="col-md-3">
				<?php echo do_shortcode('[widget id="text-15"]'); ?>
			</div>
            <div class="col-md-3">
				<?php echo do_shortcode('[widget id="text-12"]'); ?>
				
				
				<!--<div class="footer-text">
					
					<p>&nbsp;</p>
				</div>
				<div class="clear"></div>-->
				<div id="toTop"><i class="fa fa-chevron-up"></i></div>
			</div>
</div>
<div class="row">
            <div class="col-md-12" id="footer-address">
			<?php /*echo do_shortcode('[widget id="text-13"]');*/ ?>
McDowell Village&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;8300 East McDowell Road, Scottsdale, AZ 85257&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;480.970.6400<br>
					<?php 
					//$footer_text = esc_attr(of_get_option('footer_text'));
					$footer_text = "© " . date("Y") . " WESTliving";
					if ('' != $footer_text) {
						echo stripslashes(htmlspecialchars_decode($footer_text));
					} else { ?>
						<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'duena' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'duena' ), 'WordPress' ); ?></a>
					<?php } ?>
<!--&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.westliving.net/privacy-policy">WESTliving Privacy Policy</a>-->&nbsp;&nbsp;&nbsp;<img src="/wp-content/uploads/equal_housing.png" alt="" />
		</div>
</div>
		</div>
	</footer><!-- #colophon -->
    <div id="global-footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <span id="global-footer-links">
                		<a href="http://www.westliving.net" class="btn" target="_blank">WESTliving.net</a>
                        <a href="http://www.westliving.net/careers/?cat=5" class="btn" target="_blank">WESTliving Careers</a>
                        <a href="http://www.westliving.net/news" class="btn" target="_blank">WESTliving News</a>
                    </span>
                </div>
            </div>
    	</div>
    </div><!-- #global-footer -->
</div><!-- .page-wrapper -->

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){

	/*Add Current Page / Parent Indicator on Menu */
	var currentPageVar = $("#breadcrumbs > span > span:nth-child(2)").text();
	if(currentPageVar == "News") {
		$(".page-item-14").addClass("current_page_item");
	} else if(currentPageVar == "Careers") {
		$(".page-item-16").addClass("current_page_item");
	} else if(currentPageVar == "About Us") {
		$(".page-item-12").addClass("current_page_item");
	}
	
});
</script>

</body>
</html>