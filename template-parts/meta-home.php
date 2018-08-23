<?php
/**
 * Created by PhpStorm.
 * User: christianek
 * Date: 12/02/2018
 * Time: 08:57
 */

$site_title = get_bloginfo( 'name' );
$site_desc  = get_bloginfo( 'description' );

?>

<!-- Title / Meta-->
<title>Kristent Fellesskap Oslo | Kjenne Gud, elske mennesker, trene disipler</title>
<meta name="description" content="<?php echo $site_desc ?>"/>

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php echo $site_title ?>">
<meta itemprop="description" content="<?php echo $site_desc ?>">
<meta itemprop="image" content="/punchline.svg">

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $site_title ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:image" content="/punchline.svg"/>
<meta property="og:description" content="<?php echo $site_desc ?>"/>
<meta property="og:site_name" content="<?php echo $site_title ?>"/>
