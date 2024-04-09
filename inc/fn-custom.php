<?php
/**
 * Add Logo in Header section
 */
function ib_display_header_logo() {
	$header_logo = get_field( 'header_logo', 'option' );
	if ( ! empty( $header_logo ) ) : ?>
        <div class="site-logo">
            <a href="<?php echo home_url(); ?>" title="home" rel="home">
                <img src="<?php echo $header_logo['url']; ?>" height="40" width="160" alt="<?php bloginfo( 'name' ); ?>"/>
            </a>
        </div>
	<?php endif;
}
add_action( 'storefront_header', 'ib_display_header_logo' );
