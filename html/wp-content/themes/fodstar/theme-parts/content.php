<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fodstar
 */
$author_id = get_the_author_meta('ID');
$author_avatar_url = get_avatar_url($author_id, array('size' => 96));
?>
<div class="<?php if (is_active_sidebar('sidebar')): ?> col-lg-6 col-md-6 col-12 <?php else : ?> col-lg-4 col-md-6 col-12 <?php endif; ?>   fodstar-masonry-item fodstar-mg-top-30">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="blog-wrapper">
			<?php if (has_post_thumbnail()) : ?>
				<div class="wrapper-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fodstar-blog-thumb'); ?></a>
				</div>
			<?php endif; ?>
			<div class="wrapper-item">
				<div class="wrapper-aurthor">
					<div class="aurthor-detail">
						<img src="<?php echo esc_url($author_avatar_url); ?>" alt="<?php the_author(); ?>" />
						<h6 class="aurthor-title"><?php the_author(); ?></h6>
					</div>
					<span class="aurthor-dot"></span>
					<p class="aurthor-date"><?php fodstar_posted_on(); ?></p>
				</div>
				<div class="wrapper-content">
					<h3><a href="<?php the_permalink(); ?>" class="wrapper-title"><?php the_title(); ?></a></h3>
					<div class="wrapper-btn">
						<a href="#" class="fstr-primary-btn">
							<span><?php esc_html_e('Read More', 'fodstar'); ?></span>
							<span>
								<svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12.6222 4.38173C12.5582 4.38173 12.4984 4.38173 12.4344 4.38173C8.56253 4.38173 4.69065 4.38173 0.818766 4.38173C0.716312 4.38173 0.613859 4.37782 0.515674 4.40126C0.195508 4.46767 -0.0307435 4.76456 0.00340761 5.05755C0.0418276 5.37788 0.30223 5.60836 0.643741 5.6279C0.712043 5.6318 0.780345 5.6318 0.852917 5.6318C4.71199 5.6318 8.57534 5.6318 12.4344 5.6318C12.4984 5.6318 12.5582 5.6318 12.6649 5.6318C12.5966 5.69821 12.5582 5.73728 12.5155 5.77634C11.38 6.81937 10.2402 7.8624 9.10468 8.90543C8.82293 9.16326 8.79305 9.51875 9.03211 9.77658C9.27117 10.0383 9.68525 10.0774 9.9798 9.86643C10.0268 9.83517 10.0652 9.79611 10.1079 9.75704C11.6489 8.34681 13.19 6.93266 14.7268 5.51851C15.0982 5.17865 15.0982 4.83879 14.7268 4.49892C13.1772 3.07696 11.6233 1.65501 10.0737 0.229142C9.86881 0.0416307 9.63829 -0.0482178 9.35228 0.0260048C8.8827 0.147106 8.7034 0.670574 9.0065 1.01434C9.04492 1.06122 9.09187 1.10029 9.13883 1.14326C10.2658 2.17457 11.3885 3.20978 12.5198 4.2411C12.5625 4.28016 12.618 4.29969 12.6649 4.33094C12.6479 4.34266 12.6351 4.3622 12.6222 4.38173Z"
										fill="currentColor"></path>
								</svg>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</article>
</div>