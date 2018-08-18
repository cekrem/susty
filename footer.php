<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

</div>

<footer>
    <nav class="social-navigation">
        <a href="https://facebook.com/kfoslo">
			<?php
			printf( '<img src="%s/facebook.svg">',
				get_stylesheet_directory_uri() )
			?>
        </a>
        <a href="https://www.instagram.com/kristentfellesskaposlo/">
			<?php
			printf( '<img src="%s/instagram.svg">',
				get_stylesheet_directory_uri() )
			?>
        </a>
    </nav>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
