<?php
/**
 * Site Header
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<!DOCTYPE html>';
tha_html_before();
echo '<html ' . get_language_attributes() . '>';

echo '<head>';
	tha_head_top();
	wp_head();
	tha_head_bottom();
echo '</head>';

echo '<body class="' . join( ' ', get_body_class() ) . '">';
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
tha_body_top();
echo '<div class="site-container">';
	

	tha_header_before();
	echo '<header class="site-header">';
	echo '<a class="skip-link screen-reader-text" href="#main-content">' . esc_html__( 'Aller directement au contenu', 'pizza' ) . '</a>';
			printf('<div class="header-bkg">%s</div>', wp_get_attachment_image(6, 'full'));
			printf('<div class="header-logo"><h1 class="screen-reader-text">Corleone, Pizzas à la sauce sicilienne</h1>%s</div>',wp_get_attachment_image(14, 'full'));
	echo '</header>';
	tha_header_after();
	printf('<div class="%s" id="main-content">',apply_filters('kasutan_site_inner_class','site-inner'));
