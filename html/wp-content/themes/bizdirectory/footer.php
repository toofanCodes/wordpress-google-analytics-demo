<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizdirectory
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="prefooter">
		 	<div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	                <?php if (is_active_sidebar('bizdirectory_footer_1')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('bizdirectory_footer_1') ?>
	                    </div>
	                    <?php
	                else: bizdirectory_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('bizdirectory_footer_2')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('bizdirectory_footer_2') ?>
	                    </div>
	                    <?php
	                else: bizdirectory_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('bizdirectory_footer_3')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('bizdirectory_footer_3') ?>
	                    </div>
	                    <?php
	                else: bizdirectory_blank_widget();
	                endif; ?>
	            </div>
	        </div>
	        </div>
       </div>
		<div class="site-info">
			<div class="container">
	            <div class="row">
	            	<div class="col-md-12">
<p><?php esc_html_e('Powered By WordPress', 'bizdirectory');
                    esc_html_e(' | ', 'bizdirectory') ?>
                    <span><a target="_blank" href="https://themesartist.com/bizdirectory"><?php esc_html_e('Bizdirectory' , 'bizdirectory'); ?></a></span>
                </p>
				    </div>
				</div>
	        </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
