<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />   
		<title><?php bloginfo( 'name' ); ?></title>
		<?php wp_register_style('style', get_template_directory_uri().'/style.css'); ?>
		<?php wp_register_style('jquery.fs.shifter', get_template_directory_uri().'/jquery.fs.shifter.css'); ?>
		<?php wp_register_script('jquery.min', get_template_directory_uri().'/jquery.min.js'); ?>
		<?php wp_register_script('jquery.fs.shifter', get_template_directory_uri().'/jquery.fs.shifter.js'); ?>
		<?php wp_enqueue_style('style'); ?>
		<?php wp_enqueue_style('jquery.fs.shifter'); ?>
		<?php wp_enqueue_script('jquery.min'); ?>
		<?php wp_enqueue_script('jquery.fs.shifter'); ?>
		<?php wp_head(); ?>
	</head>
	<body class="shifter" style="background:url(<?php echo get_template_directory_uri(); ?>/img/paperBg.jpg);margin-bottom:240px;">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 0 0" xml:space="preserve" style='visibility:hidden;position:absolute;'>
			<defs>
				<lineargradient id="navFill" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="5%" stop-color="#9C774E"></stop><stop offset="95%" stop-color="#72634E"></stop></lineargradient>
				<filter id='inset-shadow'><!-- Shadow Offset --><feOffset  dx='0'  dy='0'/><!-- Shadow Blur --><feGaussianBlur  stdDeviation='2'  result='offset-blur'/><!-- Invert the drop shadow     to create an inner shadow --><feComposite  operator='out'  in='SourceGraphic'  in2='offset-blur'  result='inverse'/><!-- Color & Opacity --><feFlood  flood-color='black'  flood-opacity='1'  result='color'/><!-- Clip color inside shadow --><feComposite  operator='in'  in='color'  in2='inverse'  result='shadow'/><!-- Put shadow over original object --><feComposite  operator='over'  in='shadow'  in2='SourceGraphic'/></filter>
				<path id="buttonyCross" fill-rule="evenodd" clip-rule="evenodd" d="M98,61c-0.8,0-1.6-0.1-2.3-0.4c0.2,0.6,0.3,1.3,0.3,1.9c0,4.1-3.4,7.5-7.5,7.5c-4.1,0-7.5-3.4-7.5-7.5c0-1.3,0.3-2.5,0.9-3.5H59v22.9c1-0.6,2.2-0.9,3.5-0.9c4.1,0,7.5,3.4,7.5,7.5S66.6,96,62.5,96c-0.7,0-1.3-0.1-1.9-0.3c0.3,0.7,0.4,1.5,0.4,2.3c0,4.1-3.9,8-8,8s-8-3.9-8-8c0-0.8,0.1-1.6,0.4-2.3c-0.6,0.2-1.3,0.3-1.9,0.3c-4.1,0-7.5-3.4-7.5-7.5s3.4-7.5,7.5-7.5c1.3,0,2.5,0.3,3.5,0.9V59H24.1c0.6,1,0.9,2.2,0.9,3.5c0,4.1-3.4,7.5-7.5,7.5S10,66.6,10,62.5c0-0.7,0.1-1.3,0.3-1.9C9.6,60.8,8.8,61,8,61c-4.1,0-8-3.9-8-8s3.9-8,8-8c0.8,0,1.6,0.1,2.3,0.4c-0.2-0.6-0.3-1.3-0.3-1.9c0-4.1,3.4-7.5,7.5-7.5s7.5,3.4,7.5,7.5c0,1.3-0.3,2.5-0.9,3.5H47V24.1c-1,0.6-2.2,0.9-3.5,0.9c-4.1,0-7.5-3.4-7.5-7.5s3.4-7.5,7.5-7.5c0.7,0,1.3,0.1,1.9,0.3C45.2,9.6,45,8.8,45,8c0-4.1,3.9-8,8-8s8,3.9,8,8c0,0.8-0.1,1.6-0.4,2.3c0.6-0.2,1.3-0.3,1.9-0.3c4.1,0,7.5,3.4,7.5,7.5S66.6,25,62.5,25c-1.3,0-2.5-0.3-3.5-0.9V47h22.9c-0.6-1-0.9-2.2-0.9-3.5c0-4.1,3.4-7.5,7.5-7.5c4.1,0,7.5,3.4,7.5,7.5c0,0.7-0.1,1.3-0.3,1.9c0.7-0.3,1.5-0.4,2.3-0.4c4.1,0,8,3.9,8,8S102.1,61,98,61z"/>
			</defs>
		</svg>
		<div class='page-wrap'>
			<header>
				<div id='leatherBand' style="width:100%;background:url(<?php echo get_template_directory_uri(); ?>/img/leatherStrip.jpg);height:144px;">
						<div class='centreThings'>
							<span class="shifter-handle">Menu</span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/shield2.png" id='shieldImage' />
							<div id='titleAndNav'>
								<div id='title' class='stampText'><?php bloginfo( 'name' ); ?></div>
								<nav class='normal-navigation'>
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'header',
											)
										);
									?>
								</nav>
								<div class='mobnav_button' onclick="toggleNav()">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
				</div>
			</header>
			<nav class="mobile_navigation">
				<div id='mySidenav' class="navigation sidenav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'mobile',
							)
						);
					?>
				</div>
			</nav>
		</div>
		<script>
			$.shifter();

			var menuStatus = 'closed';

			function toggleNav() {
				if(menuStatus == 'closed') {
					document.getElementById("mySidenav").style.width = "200px";
					document.getElementById("main").style.marginRight = "200px";
					menuStatus = 'open';
				} else if(menuStatus == 'open') {
					document.getElementById("mySidenav").style.width = "0";
					document.getElementById("main").style.marginRight = "0";
					menuStatus = 'closed';
				} else {
					console.log('Error toggling mobile menu status.');
				};
			};

			function closeNav() {
				if(menuStatus == 'open') {
					document.getElementById("mySidenav").style.width = "0";
					document.getElementById("main").style.marginRight = "0";
					menuStatus = 'closed';
				};
			};
		</script>