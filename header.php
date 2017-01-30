<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package afrancis
 */
?>
 
<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php  wp_title('|', true, 'right'); ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />
    
    <!-- scripts -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.min.js" type="text/javascript"></script>
    <![endif]-->
 
    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<div class ="snap-drawers">
    <div class ="snap-drawer snap-drawer-left">
        <div class ="mobile-menu">

            <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/menu-icon.png" alt="coldwatercode temp logo" />
       
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?>
             
        </div>        
    </div>
</div>

<div id="page" class ="site">

    <header id="site-header" role="banner">
    
    <div class ="nav-container">

        <div class ="logo">

            <a href="#main" class="visuallyhidden focusable" id="skiptomain"><?php _e('', 'afrancis'); ?></a>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/coldwater-logo.svg" alt="coldwatercode logo" /></a>
            <h1>CWW</h1>
            
        </div>

            <nav class="site-navigation" role="navigation">
                <?php wp_nav_menu( array(
                  'container' => false,
                  'theme_location' => 'primary'
                )); ?>
            </nav><!-- #access -->  
            
    </div>


    <?php if( is_home() || is_front_page() ) : ?>

        <div class = "bg-image">

            <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/coldwater-1600.jpg" alt="coldwatercode hero" />

        <div class="main-logo">
            <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/coldwater-main-logo-2wave_05.png" alt="coldwatercode temp logo" />
        </div>
        </div> 
     
 

    <?php endif; ?>
         
         <div id ="open-left" class ="menu_button">

             <span></span>

         </div>


    </header><!-- #site-header .container -->

    <div class="page-main connect" id="main content">