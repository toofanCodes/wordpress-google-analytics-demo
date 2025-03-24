<?php

/**
 * The template for displaying listing slider in the archive-listing.php template
 *
 * This template can be overridden by copying it to yourtheme/adqs_directories/archive/author-info.php
 *
 * @package     QS Directories\Templates
 * @version     1.0.0
 */


if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly
}
$author_id = get_query_var('author');
if (empty($author_id)) {
   return '';
}
$Helper = AD()->Helper;
$review_ratings = $Helper->get_author_ratings($author_id);
$review_count = $Helper->get_author_review_count($author_id);
$review_text = (1 < (int) $review_count) ?  esc_html__('Reviews', 'fodstar') : esc_html__('Review', 'fodstar');
?>
<section class="qsd-auther-profile-grid">
   <div class="qsd-container">
      <div class="row">
         <div class="qsd-auther-profile-main">
            <div class="qsd-auther-profile-main-df">
               <div class="qsd-auther-profile-main-item">
                  <div class="qsd-auther-main-profile-item">
                     <div class="qsd-auther-main-profile-thumb">
                        <?php echo get_avatar($author_id, 162); ?>

                     </div>
                     <?php do_action('adqs_after_author', $author_id); ?>
                  </div>
                  <div class="qsd-auther-main-profile-txt-item">
                     <h2 class="qsd-profile-titel"><?php the_author(); ?></h2>

                     <ul class="qsd-profile-reviews-item">
                        <?php if (!empty($review_count) && !empty($review_ratings)) : ?>
                           <li> <span><i class="fa-solid fa-star"></i></span> <span><?php echo esc_html($review_ratings); ?></span> <?php echo esc_html("( {$review_count} {$review_text} )"); ?>
                           </li>
                        <?php endif; ?>


                        <li> <span><?php echo esc_html(count_user_posts($author_id, 'adqs_directory')); ?></span> <?php echo esc_html__('Listing', 'fodstar'); ?></li>

                        <?php
                        $authorRegisteredDate = get_user_by('id', $author_id)->user_registered ?? '';
                        if (!empty($authorRegisteredDate)) :
                        ?>
                           <li> <?php echo esc_html__('Member Since', 'fodstar'); ?>:<span><?php echo esc_html(wp_date('d M, Y', strtotime($authorRegisteredDate))); ?></span></li>
                        <?php endif; ?>

                     </ul>

                     <ul class="qsd-profile-contact">
                        <?php if (get_the_author_meta('adqs_address_info', $author_id)) : ?>
                           <li class="qsd-address-info">
                              <div>
                                 <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <circle cx="12" cy="11" r="3" stroke="#111827" stroke-width="1.5" />
                                       <path d="M21 10.8889C21 15.7981 15.375 22 12 22C8.625 22 3 15.7981 3 10.8889C3 5.97969 7.02944 2 12 2C16.9706 2 21 5.97969 21 10.8889Z" stroke="#111827" stroke-width="1.5" />
                                    </svg>

                                 </span>
                                 <?php the_author_meta('adqs_address_info', $author_id); ?>
                              </div>
                           </li>
                        <?php endif; ?>
                        <?php

                        if (!(AD()->Helper->get_setting('hide_author_email'))) : ?>
                           <li>
                              <a href="mailto:<?php echo esc_attr(get_the_author_meta('user_email', $author_id)); ?>">
                                 <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <rect x="2" y="3" width="20" height="18" rx="4" stroke="#28303F" stroke-width="1.5" />
                                       <path d="M2 7L9.50122 13.001C10.9621 14.1697 13.0379 14.1697 14.4988 13.001L22 7" stroke="#28303F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                 </span>
                                 <?php the_author_meta('user_email', $author_id); ?>
                              </a>
                           </li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('adqs_phone', $author_id)) : ?>
                           <li class="qsd-auth-phone">

                              <a href="tel:<?php the_author_meta('adqs_phone', $author_id); ?>">
                                 <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M21 19.75V18.1041C21 17.2863 20.5021 16.5508 19.7428 16.2471L17.7086 15.4335C16.7429 15.0471 15.6422 15.4656 15.177 16.396L15 16.75C15 16.75 12.5 16.25 10.5 14.25C8.5 12.25 8 9.75 8 9.75L8.35402 9.57299C9.28438 9.10781 9.70285 8.00714 9.31654 7.04136L8.50289 5.00722C8.19916 4.2479 7.46374 3.75 6.64593 3.75H5C3.89543 3.75 3 4.64543 3 5.75C3 14.5866 10.1634 21.75 19 21.75C20.1046 21.75 21 20.8546 21 19.75Z" stroke="#111827" stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>

                                 </span>
                                 <?php the_author_meta('adqs_phone', $author_id); ?>
                              </a>
                           </li>
                        <?php endif; ?>
                     </ul>
                  </div>
               </div>

               <?php

               $authroSocials = [
                  'adqs_facebook_profile' => 'fa-facebook',
                  'adqs_twitter_profile' => 'fa-twitter',
                  'adqs_instagram_profile' => 'fa-instagram',
                  'adqs_linked_profile' => 'fa-linkedin',
               ];
               $authroSocials = array_filter($authroSocials, function ($key) use ($author_id) {
                  return get_the_author_meta($key, $author_id) ? true : false;
               }, ARRAY_FILTER_USE_KEY);
               if (!empty($authroSocials)) :

               ?>

                  <div class="qsd-auther-profile-social-icon-item">

                     <span><?php echo esc_html__('Find Me', 'fodstar'); ?>:</span>

                     <ul class="qsd-auther-profile-social-icon">
                        <?php
                        foreach ($authroSocials as $key_name => $icon) :
                        ?>
                           <?php if (get_the_author_meta($key_name, $author_id)) : ?>
                              <li>
                                 <a href="<?php echo esc_url(get_the_author_meta($key_name, $author_id)); ?>" target="_blank">
                                    <span><i class="fa-brands <?php echo esc_attr($icon); ?>"></i></span>
                                 </a>
                              </li>
                           <?php endif; ?>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               <?php endif; ?>
            </div>
            <?php if (get_the_author_meta('description', $author_id)) : ?>
               <h5 class="qsd-agents-txt"><?php echo esc_html__('About Agents', 'fodstar'); ?></h5>

               <p class="qsd-agents-sub-txt">
                  <?php the_author_meta('description', $author_id); ?>

               </p>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>