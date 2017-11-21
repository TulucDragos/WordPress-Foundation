<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
        <div class="grid-container" id="container">

            <section id="home">

                <!-- navigation -->
                <div class="nav-bar">
                    <div class="grid-x grid-padding-x">

                        <div class="cell large-12" id= "nav-bar">
                            <div data-sticky-container>
                                <div class="top-bar" data-sticky data-margin-top="0" id="top-menu">
                                    <div class="top-bar-left" id="left">
                                        <ul class="dropdown menu" data-dropdown-menu>
                                            <li class="menu-text">Your Logo</li>
                                        </ul>
                                    </div>

                                    <div class="top-bar-right" id="right">
                                        <ul class="menu">
                                            <li><a href="#home">HOME</a></li>
                                            <li><a href="#pages">PAGES</a></li>
                                            <li><a href="#work">FEATURES</a></li>
                                            <li><a href="#services">SERVICES</a></li>
                                            <li><a href="#blog">BLOG</a></li>
                                            <li><a href="#contact">CONTACT</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


			<!-- /header -->
