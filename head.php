<!-- *           
     *        ██╗    ██╗    ██████╗      ██████╗      ██████╗
     *        ██║    ██║    ██╔══██╗    ██╔════╝     ██╔════╝
     *        ██║ █╗ ██║    ██████╔╝    ██║  ███╗    ██║
     *        ██║███╗██║    ██╔═══╝     ██║   ██║    ██║
     *        ╚███╔███╔╝    ██║         ╚██████╔╝    ╚██████╗
     *         ╚══╝╚══╝     ╚═╝          ╚═════╝      ╚═════╝ 
     *      Contribute to our Community ;) contact@wpgreece.org
 * -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>



    <!-- GENERAL META TAGS -->
    
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />

    <?php // SEO plugin handles SEO stuff. ?>
    <title><?php wp_title( '' ); ?></title>

    <meta name = "Author"    content = "<?php bloginfo( 'name' ); ?> &copy;" />
    <meta name = "Owner"     content = "<?php bloginfo( 'name' ); ?> &copy;" />
    <meta name = "Publisher" content = "<?php bloginfo( 'name' ); ?> &copy;" />
    <meta name = "Copyright" content = "<?php bloginfo( 'name' ); ?> &copy;" />

    <meta name = "Robots" content = "all, index, follow" />

    <link rel = "alternate" type = "application/rss+xml" title = "<?php bloginfo( 'name' ); ?> RSS Feed" href = "<?php bloginfo( 'rss2_url' ); ?>" />

    <meta name = "viewport" content = "width=device-width, initial-scale=1, user-scalable=1, minimal-ui" />
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />



    <!-- FACEBOOK FALLBACK IMAGE -->

    <?php 
        // Facebook fallback featured image.
        
        vanilla_theme_get_facebook_featured_image(); 
    ?>


    
    <!-- FAVICONS, THE WORKS -->

    <?php
        // Output all favicons.
        
        vanilla_theme_head_favicons();
    ?>

    
    <!-- WORDPRESS HEAD OUTPUT -->

    <?php
        // Output WordPress head stuff.
        
        wp_head();
    ?>


</head>



<body <?php body_class(); ?>>