<?php
/**
 * Frontpage Editor Choice Section.
 *
 * @package Wise Blog
 */

// Banner Section.
$editor_choice_section = get_theme_mod( 'wise_blog_editor_choice_section_enable', false );

if ( false === $editor_choice_section ) {
	return;
}

$content_ids                = array();
$editor_choice_content_type = get_theme_mod( 'wise_blog_editor_choice_content_type', 'post' );

if ( $editor_choice_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$content_ids[] = get_theme_mod( 'wise_blog_editor_choice_post_' . $i );
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
	$cat_content_id = get_theme_mod( 'wise_blog_editor_choice_category' );
	$args           = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	$section_title    = get_theme_mod( 'wise_blog_editor_choice_title', __( 'Editor Choice', 'wise-blog' ) );
	$section_subtitle = get_theme_mod( 'wise_blog_editor_choice_subtitle', '' );
	?>
	
	<section class="blog-editors-choice section-divider">
		<div class="site-container-width">
			<div class="header-title">
				<h3 class="section-title"><?php echo esc_html( $section_title ); ?></h3>
				<p class="sub-title"><?php echo esc_html( $section_subtitle ); ?></p>
			</div>
			<div class="container-wrap">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
					<div class="single-card-container grid-card">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="single-card-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
						<?php } ?>
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
		</div>
	</section>
	<?php
}
