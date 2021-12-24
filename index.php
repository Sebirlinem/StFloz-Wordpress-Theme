<?php get_header(); ?>

<div id='main' class='centreThings' onclick="closeNav()">
	<br /><br />
	<?php
		if( is_page() ) {
			single_post_title( '', FALSE );
			the_post();
			the_content();
		} else if ( have_posts() && ! is_single() ) {
			while ( have_posts() ) {
				the_post();
				the_title( '<h4>', '</h4>' );
				the_excerpt();
				the_shortlink( 'View', '', '<span style="float:right;font-family:prince_valiantregular;font-size:1.2em;background-color:rgba(55, 39, 26,0.3);padding:5px 16px 2px 16px;border-radius:10px 10px 0 0;">', '</span><br /><hr />' );
			}
			wp_pagenavi();
		} else if ( is_single() ) {
			the_post();
			the_title( '<h4>', '</h4>' );
			the_content();
		} else {
			echo 'There is nothing to display. If you believe this is an error, please contact the webmaster at the email address below.';
		}
	?>
	<br /><br/>
</div>

<?php get_footer(); ?>