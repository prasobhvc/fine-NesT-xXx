<?php
/**
 *	Kalium WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

# Get Menu Type To Use
$main_menu_type = get_data('main_menu_type');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js" type="text/javascript"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
		
	if( ! defined('KALIUM_NO_HEADER')):
		
		# Theme Borders
		if(get_data('theme_borders')):
		
			get_template_part('tpls/borders');
			
		endif;

		# Mobile Menu
		include locate_template('tpls/menu-mobile.php');
		
		# Top Menu
		if($main_menu_type == 'top-menu' || get_data('menu_top_force_include'))
		{
			include locate_template('tpls/menu-top.php');
		}
				
		# Sidebar Menu
		if($main_menu_type == 'sidebar-menu' || get_data('menu_sidebar_force_include'))
		{
			include locate_template('tpls/menu-sidebar.php');
		}
		
	endif;
	?>
	<div class="wrapper" id="main-wrapper">
	<?php
		
		if( ! defined('KALIUM_NO_HEADER')):
			# Main Header
			get_template_part('tpls/header-main');	
		endif;
	?>
    