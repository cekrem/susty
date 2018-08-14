<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
    <header id="main-header">
        <div class="logo">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			endif;
			?>
        </div>

        <nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( [
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			] );
			?>
            <a href="https://facebook.com/kfoslo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
            </a>
        </nav><!-- #site-navigation -->


    </header>

    <div id="content">
