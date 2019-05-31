<?php
function wobee_ajax_variation_threshold( $default, $product ) {
	return 50; // Up limits
}
add_filter( 'woocommerce_ajax_variation_threshold', 'wobee_ajax_variation_threshold', 10, 2 );
?>
