<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="http://test-sentec/geosite.ru/wp-includes/js/jquery/ui/tabs.min.js"></script>
		<script src="http://test-sentec.geosite.ru/wp-content/themes/bones/library/js/index.js" type="text/javascript"></script>
		<script src="http://test-sentec.geosite.ru/wp-content/themes/bones/library/js/package.js" type="text/javascript"></script>
		<script src="http://test-sentec.geosite.ru/wp-content/themes/bones/library/js/tab.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="http://test-sentec.geosite.ru/wp-content/themes/bones/library/css/tab.min.css">
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div id="header_logo"></div>
				<p id="header_phone"><?php echo do_shortcode('[ksseditor_shortcode name="header phone" id="3"]'); ?></p>
				<div id="inner-header">
					<input type="radio" name="point" id="slide1" checked>
					<input type="radio" name="point" id="slide2">
					<input type="radio" name="point" id="slide3">
					<div class="slider">
						<div class="slider_text">
							<p class="title">
								<?php echo do_shortcode('[ksseditor_shortcode name="slide1 title" id="1"]'); ?>
							</p>
							<ul>
								<?php echo do_shortcode('[ksseditor_shortcode name="slide1 text" id="2"]'); ?>
							</ul>
							<a class="buy" href="#">
								Заказать
							</a>
							<a class="more" href="#">
								Узнать подробнее
							</a>
						</div>
						<div class="slides slide1"></div>
						<div class="slides slide2"></div>
						<div class="slides slide3"></div>
					</div>
					<div class="controls">
						<label for="slide1"></label>
						<label for="slide2"></label>
						<label for="slide3"></label>
					</div>
				</div>

			</header>
