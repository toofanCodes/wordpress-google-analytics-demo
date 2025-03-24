<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fodstar
 */

$show_wishlist_button = get_theme_mod('show_wishlist_button', 'on');
$wishlist_button_link = get_theme_mod('wishlist_button_link', '#');
$show_login_button = get_theme_mod('show_login_button', 'on');
$login_button_text = get_theme_mod('login_button_text', 'Login');
$login_button_link = get_theme_mod('login_button_link', '#');
$show_listing_button = get_theme_mod('show_listing_button', 'on');
$listing_button_text = get_theme_mod('listing_button_text', 'Add Listing');
$listing_button_link = get_theme_mod('listing_button_link', '#');

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'fodstar'); ?></a>

		<header class="fodstar-header site-header">
			<?php if (get_header_image()) : ?>
				<div class="header-image">
					<img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">
				</div>
			<?php endif; ?>
			<div class="container">
				<div class="d-none d-lg-block">
					<div class="row align-items-center justify-between">
						<div class="col-lg-2">
							<div class="fodstar-logo">
								<?php if (function_exists('the_custom_logo') && has_custom_logo()) {
									the_custom_logo();
								} else { ?>
									<div class="normal-text">
										<a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
										<?php $fodstar_title_description = get_bloginfo('description', 'display'); ?>
										<p class="site-description"><?php echo esc_html($fodstar_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																	?></p>
									</div>
								<?php } ?>

								<div class="fodstar-header__menu">
									<nav id="site-navigation" class="fodstar-header__nav navbar navbar-expand-lg" style="display: none;">
										<div class="navbar-collapse">
											<?php
											wp_nav_menu(array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'menu_class'        => 'nav fodstar-menu navbar-nav',
											));
											?>
										</div>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="fodstar-header__main-inside">
								<nav class="fodstar-header__nav">
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'        => 'main-menu',
									));
									?>
								</nav>

							</div>
						</div>

						<div class="col-lg-4">
							<div class="header-button">
								<?php if (true == get_theme_mod('show_wishlist_button', 'on')) : ?>
									<div class="wishlist d-none d-xl-block">
										<a href="<?php echo esc_url($wishlist_button_link); ?>">
											<span class="fstr-wishlist">
												<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M16 4.49999C17.1045 4.49999 18 5.39542 18 6.49999M11 3.70252L11.6851 2.99999C13.816 0.814702 17.2709 0.8147 19.4018 2.99999C21.4755 5.12659 21.5392 8.55379 19.5461 10.7599L13.8197 17.0981C12.2984 18.782 9.70154 18.782 8.18026 17.0981L2.45393 10.7599C0.460783 8.55382 0.5245 5.12661 2.5982 3C4.72912 0.814713 8.18404 0.814715 10.315 3.00001L11 3.70252Z"
														stroke="currerntColor"
														stroke-width="1.5"
														stroke-linecap="round"
														stroke-linejoin="round" />
												</svg>
											</span>
										</a>
									</div>
								<?php endif; ?>
								<?php if (true == get_theme_mod('show_login_button', 'on')) : ?>
									<?php if ( ! (is_user_logged_in()) ) : ?>
									<div class="fstr-login">
										<a href="<?php echo esc_url($login_button_link); ?>" class="fstr-login-btn" type="button">
											<span>
												<svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M9 15V13M13 7H5C2.79086 7 1 8.79086 1 11V17C1 19.2091 2.79086 21 5 21H13C15.2091 21 17 19.2091 17 17V11C17 8.79086 15.2091 7 13 7ZM13 7L13 5C13 2.79086 11.2092 1 9.00003 1C7.51946 1 6.22678 1.8044 5.53516 3"
														stroke="#28303F"
														stroke-width="1.5"
														stroke-linecap="round"
														stroke-linejoin="round" />
												</svg>
											</span>
											<span> <?php echo esc_html($login_button_text); ?></span>
										</a>
									</div>
									<?php else : ?>
										<div class="fstr-login">
										<a href="<?php echo esc_url($login_button_link); ?>" class="fstr-login-btn" type="button">
											<span>
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path	path d="M18.5588 20.1623C17.5654 17.5053 15.0036 15.6135 12 15.6135C8.99638 15.6135 6.4346 17.5053 5.44117 20.1623M18.5588 20.1623C20.6672 18.329 22 15.6269 22 12.6135C22 7.09068 17.5228 2.61353 12 2.61353C6.47715 2.61353 2 7.09068 2 12.6135C2 15.6269 3.33285 18.329 5.44117 20.1623M18.5588 20.1623C16.8031 21.6892 14.5095 22.6135 12 22.6135C9.49052 22.6135 7.19694 21.6892 5.44117 20.1623" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
													<circle cx="3" cy="3" r="3" transform="matrix(1 0 0 -1 9 12.6135)" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></circle>
												</svg>
											</span>
											<span><?php esc_html_e('Dashboard','fodstar');?></span>
										</a>
									</div>
									<?php endif;?>
								<?php endif; ?>
								<?php if (true == get_theme_mod('show_listing_button', 'on')) : ?>
									<div class="fstr-btn">
										<a href="<?php echo esc_url($listing_button_link); ?>" class="fodstar-btn">
											<span class="icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9 3V15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M3 9H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</span>
											<span><?php echo esc_html($listing_button_text); ?> </span>
										</a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<nav class="mobile-menu d-block d-lg-none">
					<div class="mobile-header">
						<div class="header-logo">
							<?php if (function_exists('the_custom_logo') && has_custom_logo()) {
								the_custom_logo();
							} else { ?>
								<div class="normal-text">
									<a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
									<?php $fodstar_title_description = get_bloginfo('description', 'display'); ?>
									<p class="site-description"><?php echo esc_html($fodstar_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
								</div>
							<?php } ?>
						</div>
						<button
							type="button"
							class="hamburger-btn offcanvas-open-btn"
							data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasWithBothOptions"
							aria-controls="offcanvasWithBothOptions">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>

					<div class="mobile-menu-popup offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
						<div class="offcanvas-header">
							<?php if (function_exists('the_custom_logo') && has_custom_logo()) {
								the_custom_logo();
							} else { ?>
								<div class="normal-text">
									<a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
									<?php $fodstar_title_description = get_bloginfo('description', 'display'); ?>
									<p class="site-description"><?php echo esc_html($fodstar_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
								</div>
							<?php } ?>
							<button class="offcanvas__close-btn offcanvas-close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="mobile-menu-section">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'mobile-menu',
									'menu_class'        => 'menu-list',
								));
								?>
							</div>
						</div>
					</div>
				</nav>
			</div>

		</header>

		<div id="primary" class="fodstar-section-main">