<?php
/*========================Banner Section==============================*/
function wise_blog_if_banner_enabled( $control ) {
	return $control->manager->get_setting( 'wise_blog_banner_section_enable' )->value();
}
function wise_blog_banner_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'wise_blog_banner_content_type' )->value();
	return wise_blog_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function wise_blog_banner_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'wise_blog_banner_content_type' )->value();
	return wise_blog_if_banner_enabled( $control ) && ( 'category' === $content_type );
}

/*========================Editor Choice Section==============================*/
function wise_blog_if_editor_choice_enabled( $control ) {
	return $control->manager->get_setting( 'wise_blog_editor_choice_section_enable' )->value();
}
function wise_blog_editor_choice_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'wise_blog_editor_choice_content_type' )->value();
	return wise_blog_if_editor_choice_enabled( $control ) && ( 'post' === $content_type );
}
function wise_blog_editor_choice_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'wise_blog_editor_choice_content_type' )->value();
	return wise_blog_if_editor_choice_enabled( $control ) && ( 'category' === $content_type );
}

/*========================Static Homepage==============================*/
function wise_blog_is_static_homepage_enabled( $control ) {
	return ( 'page' === $control->manager->get_setting( 'show_on_front' )->value() );
}