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

<div id="root">
    <aside>
        <span class="logo">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				printf( '<a href="/"><img src="%s/heart.svg"></a>',
					get_stylesheet_directory_uri() );
			endif;
			?>
        </span>

        <nav>
			<?php
			wp_nav_menu( [
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			] );
			?>
        </nav><!-- #site-navigation -->
    </aside>

    <main>
