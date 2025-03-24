<?php

/**
 * The Template for displaying all archive-listing
 *
 * This template can be overridden by copying it to yourtheme/adirectory/archive-listing.php.
 *

 * @package     aDirectoriy\Templates
 * @version     1.0.0
 */

/**
 * the template for displaying all posts.
 */

get_header();
do_action('adqs_before_main_content');
?>

<main id="site-content" class="content-area" role="main">
    <div class="container">
        <div class="row">

            <?php
            /**
             * adqs_before_main_content hook.
             *
             * @hooked adqs_output_content_wrapper_start - 10 (outputs opening divs for the content)
             */

            adqs_get_template_part('content', 'archive-listing');
            do_action('adqs_after_main_content');
            ?>


        </div> <!-- .row -->
    </div> <!-- .container -->
</main> <!--#main-content -->
<?php get_footer(); ?>