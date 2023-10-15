<?php

	/**
	 * [Core template name]	Header (Partial)
	 *
	 * This is the core header file that is included in all of the WordPress 
	 * templates used throughout the theme. This file contains the HTML that
	 * makes up the top of every website page.php.
	 *
	 * You should note the `wp_header();` hook that plugins and WordPress core
	 * may use to add additional HTML and stylesheets and/or JavaScript 
	 * files to the website.
	 *
	 * Please note: You should enqueue stylesheets and JavaScript documents
	 * - DO NOT simply insert them at the bottom of this document.
	 *
	 * @category 	Core WordPress template files
	 * @package  	fruit-bowl
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2023 The Very Creative Fruit Bowl Company
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Please note: The <!DOCTYPE HTML> element CAN NOT have any characters before it
	 * 				otherwise there will be styling issues with the rendered website.
	 */
	
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">



		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/favicon.ico">
		<link rel="icon"          type="image/png"    href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/favicon-32x32.png"             sizes="32x32">
		<link rel="icon"          type="image/png"    href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/favicon-194x194.png"           sizes="194x194">
		<link rel="icon"          type="image/png"    href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/android-chrome-192x192.png"    sizes="192x192">
		<link rel="icon"          type="image/png"    href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/favicon-16x16.png"             sizes="16x16">
		<link rel="apple-touch-icon"                  href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/apple-touch-icon.png"          sizes="180x180">
		<link rel="mask-icon"                         href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/safari-pinned-tab.svg"         color="#f07622">
		<link rel="manifest"                          href="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/site.webmanifest">
		<meta name="msapplication-config"             content="<?php echo get_stylesheet_directory_uri(); ?>/media/images/favicons/browserconfig.xml">
		<meta name="theme-color"                      content="#f07622">
		<meta name="msapplication-TileColor"          content="#f07622">
		<meta name="apple-mobile-web-app-title"       content="Fruit Bowl Co">
		<meta name="application-name"                 content="Fruit Bowl Co">



		<?php wp_head(); ?>
	</head>





	<body <?php body_class(); ?>>
		<a href="#main" class="u-skip-link">Skip to content</a>