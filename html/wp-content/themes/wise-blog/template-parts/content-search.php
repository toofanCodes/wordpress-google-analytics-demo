<?php
/**
 * Template part for displaying posts search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wise Blog
 */

$archive_category = get_theme_mod( 'wise_blog_enable_archive_category', true );
$archive_author   = get_theme_mod( 'wise_blog_enable_archive_author', true );
$archive_date     = get_theme_mod( 'wise_blog_enable_archive_date', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-card-container grid-card">
		<div class="single-card-image">
			<?php wise_blog_post_thumbnail(); ?>
		</div>
		<div class="single-card-detail">
			<?php if ( $archive_category === true ) : ?>
				<div class="card-categories">
					<?php wise_blog_categories_list(); ?>
				</div>
			<?php endif; ?>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			if ( 'post' === get_post_type() ) :
				?>
				<div class="card-meta">
					<?php if ( $archive_author === true ) : ?>
						<span class="post-author"><?php wise_blog_posted_by(); ?></span>
					<?php endif; ?>
					<?php if ( $archive_date === true ) : ?>
						<span class="post-date"><?php wise_blog_posted_on(); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="post-content">
				<?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), get_theme_mod( 'wise_blog_excerpt_length', 15 ) ) ); ?>
			</div><!-- post-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
