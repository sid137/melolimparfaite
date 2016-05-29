<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
<meta name="verification" content="5468fbfcd17a83157aef2e6c0bab2a71" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="openid2.provider" href="https://www.google.com/accounts/o8/ud?source=profiles" /> 
        <link rel="openid2.local_id" href="https://profiles.google.com/melolimparfaite" /> 
        <link rel="me" href="https://plus.google.com/+MeloLimparfaite" /> 
        <link rel="me" href="https://twitter.com/melolimparfaite" />
        <!-- <link rel="openid2.local_id" href="https://plus.google.com/+MeloLimparfaite" /> -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>
        <div class="container">
            <div class="header row" id="header" role="banner">
                <header>
                    <div class="site-branding">
                        <h1 id="site-title">
                            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                        </h1>
                        <h2 id="site-description"><?php bloginfo('description'); ?></h2>
                    </div>
                </header>

                <nav class="navi-wrap">
                        <?php $romangie_defaults = array(
                            'theme_location' => 'header-menu',
                            'container' => 'ol',
                            'menu_class' => 'flexnav'
                            );
                        
                        wp_nav_menu($romangie_defaults); ?>
                </nav> <!-- /navi-wrap -->
                <br class="clear" />
            </div> <!-- /header -->
