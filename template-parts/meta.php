<?php
/**
 * Created by PhpStorm.
 * User: christianek
 * Date: 12/02/2018
 * Time: 08:43
 */

if ( is_home() ) {
	get_template_part( 'template-parts/meta', 'home' );
} else {
	get_template_part( 'template-parts/meta', 'post' );
}

