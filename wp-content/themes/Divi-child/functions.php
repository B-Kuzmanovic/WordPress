<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

//REMOVE BLOG IMAGE CROPPING
function wpc_remove_height_cropping($height) {
	return '9999';
}
function wpc_remove_width_cropping($width) {
	return '9999';
}
add_filter( 'et_pb_blog_image_height', 'wpc_remove_height_cropping' );
add_filter( 'et_pb_blog_image_width', 'wpc_remove_width_cropping' );

//RELATED PRODUCTS TITLE
add_filter('gettext', 'change_relatedproducts_text', 10, 3);
function change_relatedproducts_text($new_text, $related_text, $source) {
	if ($related_text === 'Related products' && $source === 'woocommerce') {
		$new_text = esc_html__('You might also like:', $source);
	}
	return $new_text;
}

/*CUSTOMIZE EMPTY CART*/
function ds_custom_wc_empty_cart_text() {
	ob_start();
	?><div class="cart-empty"><div class="empty-cart-header"><?php
		?></div>
			<div class="empty-cart">
				<span class="empty-cart-icon">&#xe07a;</span>
				<h2>Your Cart Is Currently Empty!</h2>
				<p>Looks like you have not added any products yet. Return to the shop and browse through our wide variety of products!</p>
			</div>
		</div><?php
	$output = ob_get_clean();
	ob_flush();
	echo et_core_intentionally_unescaped($output, 'html');
}
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_filter('woocommerce_cart_is_empty', 'ds_custom_wc_empty_cart_text', 20 );