<?php
/*
Template Name: Home
*/
get_header();
// $pagina = "index";

?> 
    <?php if ( have_posts() ): ?> 
        <?php while ( have_posts() ) : the_post(); ?>
    <!-- <main class="intro"></main> --> 
    <!--slide-->
    <?php 
    $slides = get_field('slides_home');
    if( $slides ): ?>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $slides as $slide ): ?>
                    <li>
                        <img src="<?php echo $slide['url']; ?>" alt="<?php echo $slide['alt']; ?>" />
                        <p><?php echo $slide['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div> 
    <?php endif; ?>
    <!-- <div id="slider" class="flexslider">
      <ul class="slides">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" /></li> 
        </ul>
    </div> -->
        <?php endwhile; ?>
    <?php endif; ?> 
    <div class="main-mobile"></div>
    <!--video coleção-->
    <section class="tag-colecao">
        <div class="container">
            <div class="grid-12 video-colecao">
                <div class="wrapper-video">
                    <!-- <div class="youtube" data-embed="<?php the_field('video_home', 'option'); ?>">
                        <div class="play-button"></div>
                    </div> -->
                    <!--vídeo mp4 html5-->
                    <video class="video" controls src="<?php the_field('video_home_mp4', 'option'); ?>"></video>
                </div>
            </div>

                <div class="colecao-container">
                    <div class="grid-6 img-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-frase-colecao.png">
                    </div>

                    <div class="grid-6 text-content">
                        <h1><?php the_field('nome_colecao_home', 'option'); ?><strong><?php the_field('ano_da_colecao_home', 'option'); ?></strong></h1>
                        <p><?php the_field('sobre_a_colecao_destaque_home', 'option'); ?></p>
                        <div class="small"><?php the_field('sobre_a_colecao_home', 'option'); ?></div>
                    </div>
                </div>
        </div>
    </section>
 
    <section class="tag-contato">
        <div class="container">
            <div class="grid-6 text-content">
                <h1>Ligamos <strong>Para Você</strong></h1>
                <h2>Deixe o seu contato conosco! Em breve, um atendente da Sonho entrará em contato para  auxiliar você.</h2>
                <p>Comercial: <small>+55 81</small> <phone>3722.0835</phone>
                    <!-- <a href="https://goo.gl/9hn3W5" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/wa.png"></a> -->
                </p>
            </div>
            <div class="grid-6 form-content">
                <?php echo do_shortcode('[contact-form-7 id="1613" title="Contato Home"]');?>   
            </div>
        </div>
    </section>

    
    <section class="tag-noticias">
        <div class="container">
            <h1>Siga @sonhodenene<strong> no Instagram</strong></h1>
            
            <!-- carousel begin --> 
            <?php echo do_shortcode('[elfsight_instagram_feed id="1"]');?>    
            <!-- carousel :end -->
        </div>
        <div class="bg-noticias">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-noticias.png" alt="Noticias">
        </div>
    </section>

<?php get_footer(); ?>