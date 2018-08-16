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
    <!--		<a href="-->
	<?php //echo esc_url( __( 'https://wordpress.org', 'susty' ) ); ?><!--">-->
    <!--			--><?php
	//			/* translators: %s: CMS name, i.e. WordPress. */
	//			printf( esc_html__( 'Proudly powered by %s', 'susty' ), 'WordPress' );
	//			?>
    <!--		</a>-->
    <!--		<span> | </span>-->
    <!--			--><?php
	//			/* translators: 1: Theme name, 2: Theme author. */
	//			printf( esc_html__( 'Theme: %1$s by %2$s.', 'susty' ), '<a href="https://github.com/jacklenox/susty">Susty</a>', '<a href="https://blog.jacklenox.com">Jack&nbsp;Lenox</a>' );
	//			?>
</footer>
</div>

<?php wp_footer(); ?>

<script>
  document.body.classList.add('loaded')
  window.addEventListener('beforeunload', function (event) {
    document.body.classList.remove('loaded')
  })
</script>

</body>
</html>
