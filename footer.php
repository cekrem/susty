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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124490797-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124490797-1');
</script>


</body>
</html>
