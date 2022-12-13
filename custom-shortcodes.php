<?php

function champions_block() {
	$heavy_portrait = get_theme_mod( "heavy_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$heavy_title = get_theme_mod( "heavy_name", "TBA" );
	$heavy_view = get_theme_mod( "heavy_show", "true" );
	$fencing_portrait = get_theme_mod( "fencing_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$fencing_title = get_theme_mod( "fencing_name", "TBA" );
	$fencing_view = get_theme_mod( "fencing_show", "true" );
	$archery_portrait = get_theme_mod( "archery_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$archery_title = get_theme_mod( "archery_name", "TBA" );
	$archery_view = get_theme_mod( "archery_show", "true" );
	$arts_portrait = get_theme_mod( "arts_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$arts_title = get_theme_mod( "arts_name", "TBA" );
	$arts_view = get_theme_mod( "arts_show", "true" );
	$baroness_portrait = get_theme_mod( "baroness_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$baroness_title = get_theme_mod( "baroness_name", "TBA" );
	$baroness_view = get_theme_mod( "baroness_show", "true" );
	$barons_portrait = get_theme_mod( "barons_pic", get_template_directory_uri() . "/img/miscChamp.jpg" );
	$barons_title = get_theme_mod( "barons_name", "TBA" );
	$baron_view = get_theme_mod( "baron_show", "true" );

	$heavyblock = '<div class="heavy"><p class="champ_title">Heavy Champion</p><img class="heavy_pic champ_pic" src="' . esc_html($heavy_portrait) . '" /><p class="champ_name">' . esc_html($heavy_title) . '</p></div>';
	$fencingblock = '<div class="fencing"><p class="champ_title">Fencing Champion</p><img class="fencing_pic champ_pic" src="' . esc_html($fencing_portrait) . '" /><p class="champ_name">' . esc_html($fencing_title) . '</p></div>';
	$archeryblock = '<div class="archery"><p class="champ_title">Archery Champion</p><img class="archery_pic champ_pic" src="' . esc_html($archery_portrait) . '" /><p class="champ_name">' . esc_html($archery_title) . '</p></div>';
	$artsblock = '<div class="arts"><p class="champ_title">Arts & Science Champion</p><img class="arts_pic champ_pic" src="' . esc_html($arts_portrait) . '" /><p class="champ_name">' . esc_html($arts_title) . '</p></div>';
	$baronessblock = '<div class="baroness"><p class="champ_title">Baroness&rsquo;s Champion</p><img class="baroness_pic champ_pic" src="' . esc_html($baroness_portrait) . '" /><p class="champ_name">' . esc_html($baroness_title) . '</p></div>';
	$baronblock = '<div class="baron"><p class="champ_title">Baron&rsquo;s Champion</p><img class="barons_pic champ_pic" src="' . esc_html($barons_portrait) . '" /><p class="champ_name">' . esc_html($barons_title) . '</p></div>';
	$blocklist = array('');

	if ($heavy_view == 1) {
		array_push($blocklist, $heavyblock);
	};
	if ($fencing_view == 1) {
		array_push($blocklist, $fencingblock);
	};
	if ($archery_view == 1) {
		array_push($blocklist, $archeryblock);
	};
	if ($arts_view == 1) {
		array_push($blocklist, $artsblock);
	};
	if ($baroness_view == 1) {
		array_push($blocklist, $baronessblock);
	};
	if ($baron_view == 1) {
		array_push($blocklist, $baronblock);
	};

	return '<div class="champions">' . implode(" ", $blocklist) . '</div>';

}

add_shortcode('champions', 'champions_block');

?>