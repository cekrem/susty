<?php
/**
 * Created by PhpStorm.
 * User: christianek
 * Date: 12/02/2018
 * Time: 09:10
 */
?>

<!-- Title / Meta-->
<title>Kristent Fellesskap Oslo | <?php the_title() ?></title>
<meta name="description" content="<?php the_excerpt() ?>"/>

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php the_title() ?>">
<meta itemprop="description" content="<?php the_excerpt() ?>">
<meta itemprop="image" content="/punchline.svg">

<!-- Open Graph data -->
<meta property="og:title" content="Kristent Fellesskap Oslo | <?php the_title() ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:image" content="/punchline.svg"/>
<meta property="og:description" content="<?php the_excerpt() ?>"/>
<meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>"/>
<!--<meta property="article:published_time" content="--><?php //the_date() ?><!--"/>-->
<!--<meta property="article:modified_time" content="--><?php //the_modified_date() ?><!--"/>-->
<!--<meta property="article:section" content="Home"/>-->
<!--<meta property="article:tag" content="Article Tag"/>-->
<!--<meta property="fb:admins" content="Facebook numberic ID"/>-->
