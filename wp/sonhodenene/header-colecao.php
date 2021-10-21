<!DOCTYPE html>
<!--[if IE]>	<html class="no-js ie"> <![endif]-->
<!--[if !IE]><!-->	<html class="no-js int" lang="pt-br"> <!--<![endif]-->
    
<head>
	<meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">

    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>"/>
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-colecao.css">
    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>   
     
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134123058-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-134123058-1');
    </script>

	<!-- Wordpress Header -->
	<?php wp_head(); ?>
	<!-- Wordpress Header -->
</head>
<body class="corpo">
    <header>
        <div class="container">
            <div class="grid-3 menu-logo">
               <a class="brand-l" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/brand-colecao.png" alt="Sonho de Nenê"></a>
               <a class="brand-m" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/brand-m.png" alt="Sonho de Nenê"></a>
               <a class="brand-s" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/brand-s.png" alt="Sonho de Nenê"></a>
               <h4 id="tagline"><?php the_field('nome_da_colecao'); ?></h4>
            </div>
            
            <nav class="grid-9">
                <!-- menu hamburguer -->
                <span class="mobile-btn"></span>
                <ul class="menu-mobile">
                    <?php 
                        wp_nav_menu( array(

                        'menu' => 'responsivo',
                        'theme_location' => 'responsivo',
                        'container' => 'div',
                        'container_class' => 'classe_do_container',
                        'container_id' => 'id_do_container',
                        'menu_class' => 'classe_do_menu',
                        'echo' => true,
                        'menu_id' => 'id_do_menu',
                        'before' => "",
                        'after' => "",
                        'link_before' => "",
                        'link_after' => "",
                        'depth' => 0,
                        'walker' => "",
                        ) );                    
                    ?>
                </ul> 
                <!-- fim menu hamburguer -->
                <ul class="menu-nav">
                    <?php 
                        wp_nav_menu( array(

                        'menu' => 'principal',
                        'theme_location' => 'principal',
                        'container' => 'div',
                        'container_class' => 'classe_do_container',
                        'container_id' => 'id_do_container',
                        'menu_class' => 'classe_do_menu',
                        'echo' => true,
                        'menu_id' => 'id_do_menu',
                        'before' => "",
                        'after' => "",
                        'link_before' => "",
                        'link_after' => "",
                        'depth' => 0,
                        'walker' => "",
                        ) );                    
                    ?>
                </ul>
            </nav> 
        </div>
    </header>    