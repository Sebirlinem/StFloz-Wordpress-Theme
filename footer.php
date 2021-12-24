
		<footer>
            <div class="footer-tents" style="background:url(<?php echo get_template_directory_uri(); ?>/img/footerTents.svg);"></div>
            <div class='centreThings'>
                <div class='littleTab facebookTab' style="background:url(<?php echo get_template_directory_uri(); ?>/img/littleTab1.png);">
                    <a href=<?php echo get_theme_mod( 'footer_facebook', 'https://www.facebook.com/SCA.StFlorian'); ?>><img src="<?php echo get_template_directory_uri(); ?>/img/facebookIcon.png" alt='facebook icon' />| Facebook</a>
                </div>
                <div class='littleTab calTab' style="background:url(<?php echo get_template_directory_uri(); ?>/img/littleTab1.png);">
                    <a href=<?php echo get_theme_mod( 'footer_calendar', 'https://www.google.com/calendar/embed?src=qeubvk1i1niodt7q0qn4ph5lbs%40group.calendar.google.com&ctz=Australia/Brisbane'); ?>><img src="<?php echo get_template_directory_uri(); ?>/img/calIcon.png" alt='facebook icon' />| Google Cal</a>
                </div>
                <div id='disclaimer'>
                    <p><?php echo get_theme_mod( 'footer_copyright', '©2021 Barony of St Florain de la Riviere' ); ?><span class='removeThisSmall'><br /></span>
                    <?php echo get_theme_mod( 'footer_disclaimer', 'Get approved footer text here: https://webwright.lochac.sca.org/distributor/' ); ?><span class='removeThisSmall'><br /></span>
                    <a href="/website-policies/" class="policy_link">Website policies</a></p>
                </div>
                <div id='allTheSocials'>
                    <p>Webmaster:  <?php echo get_theme_mod( 'footer_webwright', 'webminister@stflorian.lochac.sca.org'); ?><span class='removeThisSmall'><br /></span>
                    Seneschal: <?php echo get_theme_mod( 'footer_seneschal', 'seneschal@stflorian.lochac.sca.org'); ?></p>
                </div>
            </div>
        </footer>
	</body>
</html>