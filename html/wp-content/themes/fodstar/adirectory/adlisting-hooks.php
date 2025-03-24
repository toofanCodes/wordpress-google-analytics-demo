<?php


/*----------------------------------------------------
Adirectory Listing hooks to add breadcrumb
-----------------------------------------------------*/
if (!function_exists('fodstar_la_before_main_content')) {
    function fodstar_la_before_main_content()
    {
        if (
            is_post_type_archive('adqs_directory')
            || is_tax('adqs_category')
            || is_tax('adqs_location')
            || is_tax('adqs_tags')
        ) {
            get_template_part('template-parts/banner/content', 'banner-blog');
        }
    }
    add_action('adqs_before_main_content', 'fodstar_la_before_main_content');
}


if (!function_exists('fodstar_remove_single_listing_fields')) {
    function fodstar_remove_single_listing_fields()
    {
        return ['_phone', '_address'];
    }
    add_filter('adqs_skip_single_listing_meta_fileds', 'fodstar_remove_single_listing_fields');
}
/*----------------------------------------------------
Adirectory Listing hooks to address & phone in single listing
-----------------------------------------------------*/

if (!function_exists('fodstar_add_single_listing_before')) {
    function fodstar_add_single_listing_before()
    {
        $listing_address = get_post_meta(get_the_ID(), '_address', true);
        $listing_phone = get_post_meta(get_the_ID(), '_phone', true);
        if (empty($listing_address) || empty($listing_phone)) {
            return;
        }
?>
        <ul class="qsd-profile-contact">
            <?php if (!empty($listing_address)) : ?>
                <li class="qsd-address-info">
                    <div>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="11" r="3" stroke="#111827" stroke-width="1.5" />
                                <path d="M21 10.8889C21 15.7981 15.375 22 12 22C8.625 22 3 15.7981 3 10.8889C3 5.97969 7.02944 2 12 2C16.9706 2 21 5.97969 21 10.8889Z" stroke="#111827" stroke-width="1.5" />
                            </svg>

                        </span>
                        <?php echo esc_html($listing_address); ?>
                    </div>
                </li>
            <?php endif; ?>
            <?php if (!empty($listing_phone)) : ?>
                <li class="qsd-auth-phone">

                    <a href="tel:<?php echo esc_attr($listing_phone); ?>">
                        <span>
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 19.75V18.1041C21 17.2863 20.5021 16.5508 19.7428 16.2471L17.7086 15.4335C16.7429 15.0471 15.6422 15.4656 15.177 16.396L15 16.75C15 16.75 12.5 16.25 10.5 14.25C8.5 12.25 8 9.75 8 9.75L8.35402 9.57299C9.28438 9.10781 9.70285 8.00714 9.31654 7.04136L8.50289 5.00722C8.19916 4.2479 7.46374 3.75 6.64593 3.75H5C3.89543 3.75 3 4.64543 3 5.75C3 14.5866 10.1634 21.75 19 21.75C20.1046 21.75 21 20.8546 21 19.75Z" stroke="#111827" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>

                        </span>
                        <?php echo esc_html($listing_phone);?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    <?php

    }
    add_action('adqs_single_listing_details', 'fodstar_add_single_listing_before', 11);
}



/**
 * Fav listing add button to grid
 */

if (!function_exists('fodstar_fav_btn_add_to_grid')) {

    // Remove action for Favorite Button
    remove_action('adqs_grid_thumnail_btn_group', 'adqs_fav_btn_add_to_grid', 15);

    // Add action for Favorite Button
    add_action('adqs_grid_thumnail_btn_group', 'fodstar_fav_btn_add_to_grid', 15, 1);

    function fodstar_fav_btn_add_to_grid($id)
    {
        $user_id = get_current_user_id();

        $fav_list = !empty(get_user_meta($user_id, 'adqs_user_fav_list', true)) ? get_user_meta($user_id, 'adqs_user_fav_list', true) : [];

    ?>
        <div class="qsd-single-group adqs-add-fav-btn <?php echo in_array($id, $fav_list) ? 'adqs-active-fav' : '' ?>" id="" data-fav-id="<?php echo esc_attr($id); ?>">
            <button>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.167 5.41658C15.0874 5.41658 15.8336 6.16278 15.8336 7.08325M10.0003 4.75203L10.5712 4.16659C12.347 2.34551 15.2261 2.34551 17.0018 4.16658C18.7299 5.93875 18.783 8.79475 17.1221 10.6332L12.3501 15.9151C11.0824 17.3182 8.91827 17.3182 7.65054 15.9151L2.8786 10.6332C1.21764 8.79478 1.27074 5.93877 2.99882 4.1666C4.7746 2.34552 7.65369 2.34552 9.42946 4.1666L10.0003 4.75203Z" stroke="url(#paint0_linear_1248_2334)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                        <linearGradient id="paint0_linear_1248_2334" x1="1.66699" y1="10.2474" x2="18.0837" y2="10.2474" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F94B44" />
                            <stop offset="1" stop-color="#FE7848" />
                        </linearGradient>
                    </defs>
                </svg>

            </button>
        </div>
<?php }
}
