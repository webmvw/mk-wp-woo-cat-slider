<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mts_Woo_Cat_Slide
 * @subpackage Mts_Woo_Cat_Slide/public/partials
 */
?> 

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="Carousel-slider">
	<section>
		<div class="Carousel-slider">

			<?php
			$args = array(
		         'taxonomy'     => 'product_cat',
		         'orderby'      => 'name',
		         'show_count'   => 1,
		         'pad_counts'   => 0,
		         'hierarchical' => 0,
		         'title_li'     => '',
		         'hide_empty'   => 1
		  	);
		  	$all_categories = get_categories( $args );
		 	foreach ($all_categories as $cat) {
		 		$thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
		 		$image = wp_get_attachment_url($thumbnail_id);
			?>
			<div class="slider-item superHero1" data-href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" >
				<img src='<?php echo $image; ?>' alt='<?php echo $cat->name; ?>'/>;
				<h2><?php echo $cat->name." - <span>".$cat->count; ?></span></h2>
			</div>
			<?php } ?>
		</div>
	</section>
</div>
