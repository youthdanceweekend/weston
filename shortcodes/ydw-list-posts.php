<?php

function ydw_list_posts($atts, $content = null) {
	extract(shortcode_atts(array(
		"category" => ""
	), $atts));

	$post_cat = $category;

	$ydwpostsloop = new WP_Query( array( 'category_name' => $post_cat, 'posts_per_page' => -1, 'post_status' => 'publish' ) );
	if ($ydwpostsloop->have_posts())
	{
		$ydw_lp_output = '<ul class="bnb">';
		while ( $ydwpostsloop->have_posts() ) : $ydwpostsloop->the_post();
		$ydw_lp_output .= '<li><a href="' . get_permalink() .'">' . get_the_title() .'</a></li>';
		endwhile;
		$ydw_lp_output .= '</ul>';
		// Reset query
		wp_reset_postdata();
	}

	return $ydw_lp_output;
}
