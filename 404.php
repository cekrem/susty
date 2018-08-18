<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Susty
 */

get_header();
?>


    <section>
        <header>
            <h1><?php esc_html_e( 'Siden finnes ikke!',
					'susty' ); ?></h1>
        </header><!-- .page-header -->

    </section>


<?php
get_footer();
