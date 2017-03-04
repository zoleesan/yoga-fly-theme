<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YogaFlyTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="middle">
            <div class="menu-section">
                <h1 class="sprite logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </h1>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'yoga-fly-theme' ); ?></button> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
                    <div class="menu-meniu-principal-container">
                        <ul id="secondary-menu" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="http://#">Yoga-Shop</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-icon-container">
                        <div class="search-icon sprite"></div>
                    </div>
                </nav>
            </div>
            <div class="quote-section">
                <h2>
                    <span class="darkblue-q">Yoga</span> is the practice of <span class="lightblue-q">quieting</span> the <span class="lightblue-q">mind.</span>
                </h2>
                <div class="quote-description">
                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
