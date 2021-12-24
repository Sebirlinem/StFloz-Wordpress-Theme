<?php

function champions_block() {
	$heavy_portrait = get_theme_mod( "heavy_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$heavy_title = get_theme_mod( "heavy_name", "TBA" );
	$fencing_portrait = get_theme_mod( "fencing_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$fencing_title = get_theme_mod( "fencing_name", "TBA" );
	$archery_portrait = get_theme_mod( "archery_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$archery_title = get_theme_mod( "archery_name", "TBA" );
	$arts_portrait = get_theme_mod( "arts_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$arts_title = get_theme_mod( "arts_name", "TBA" );
	$baroness_portrait = get_theme_mod( "baroness_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$baroness_title = get_theme_mod( "baroness_name", "TBA" );

	return '<div class="champions"><div class="heavy"><p class="champ_title">Heavy Champion</p><img class="heavy_pic champ_pic" src="' . esc_html($heavy_portrait) . '" /><p class="champ_name">' . esc_html($heavy_title) . '</p></div><div class="fencing"><p class="champ_title">Fencing Champion</p><img class="fencing_pic champ_pic" src="' . esc_html($fencing_portrait) . '" /><p class="champ_name">' . esc_html($fencing_title) . '</p></div><div class="archery"><p class="champ_title">Archery Champion</p><img class="archery_pic champ_pic" src="' . esc_html($archery_portrait) . '" /><p class="champ_name">' . esc_html($archery_title) . '</p></div><div class="arts"><p class="champ_title">Arts & Science Champion</p><img class="arts_pic champ_pic" src="' . esc_html($arts_portrait) . '" /><p class="champ_name">' . esc_html($arts_title) . '</p></div><div class="baroness"><p class="champ_title">Baroness&rsquo;s Champion</p><img class="baroness_pic champ_pic" src="' . esc_html($baroness_portrait) . '" /><p class="champ_name">' . esc_html($baroness_title) . '</p></div></div>';
}

add_shortcode('champions', 'champions_block');

?>