<?php
/**
 * Display Image (background) for Home Hero
 */
function ib_display_hero_home() {
	$hero_background = get_field( 'hero_background', 'option' );
	$bg  = ( ! empty( $hero_background ) && is_array( $hero_background ) ) ? 'style="background-image: url(' . $hero_background['url'] . ')"' : '';

	if ( $bg ) : ?>
		<section class="hero-home__wrap">
			<div class="hero-home__bg" <?php echo $bg; ?>></div>
		</section>
	<?php endif;
}
add_action('storefront_homepage', 'ib_display_hero_home');

/**
 * Display Parallax section on Home page
 */
function ib_display_parallax_section() {
	$parallax_bg = get_field( 'parallax_background');
	$content     = get_field( 'parallax_content');
	$bg          = ( ! empty( $parallax_bg ) && is_array( $parallax_bg ) ) ? 'style="background-image: url(' . $parallax_bg['url'] . ')"' : '';
	if ( $bg ) : ?>
		<section class="parallax__wrap">
			<div class="parallax__bg" <?php echo $bg; ?>></div>
			<?php if($content) : ?>
				<div class="parallax__content">
					<?php echo $content; ?>
				</div>
			<?php endif; ?>
		</section>
	<?php endif;
}
add_action('storefront_homepage', 'ib_display_parallax_section');