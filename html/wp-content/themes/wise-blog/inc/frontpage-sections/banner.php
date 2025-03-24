<?php
/**
 * Frontpage Banner Section.
 *
 * @package Wise Blog
 */

// Banner Section.
$banner_section = get_theme_mod( 'wise_blog_banner_section_enable', false );

if ( false === $banner_section ) {
	return;
}

$content_ids = array();

$banner_content_type = get_theme_mod( 'wise_blog_banner_content_type', 'post' );

if ( $banner_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$content_ids[] = get_theme_mod( 'wise_blog_banner_post_' . $i );
	}

	$args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
	if ( ! empty( array_filter( $content_ids ) ) ) {
		$args['post__in'] = array_filter( $content_ids );
		$args['orderby']  = 'post__in';
	} else {
		$args['orderby'] = 'date';
	}

} else {
	$cat_content_id = get_theme_mod( 'wise_blog_banner_category' );
	$args           = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="banner-section">
		<div class="container-wrap banner-carousel">
			<?php
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
				<div class="single-card-container tile-card">
					<div class="single-card-image">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="single-card-detail">
						<div class="card-categories">
							<?php wise_blog_categories_list(); ?>
						</div>
						<h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="card-meta">
							<span class="post-author">
								<?php wise_blog_posted_by(); ?>
							</span>
							<span class="post-date">
								<?php wise_blog_posted_on(); ?>
							</span>
						</div>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</section>
	<?php
}
