<?php
/*
Template Name: FAQ
*/
if(is_page('faq')){
    get_header('new');
}
else{
    get_header(); 
}

$faq = new WP_Query(
    array(
        'post_type'     => CPT_FAQ,
        'orderby'       => 'menu_order',
        'order'         => 'ASC'
    )
);

wp_head();

?>


    <section class="faq-destaque">
        <div class="container">
            <div class="grid-5 faq-title">
                <h1>Perguntas <strong>Frequêntes</strong></h1>
                 <div class="btns">
                    <div class="btn-sec"><a href="/.">Home</a></div> 
                    <button type="button" disabled class="btn-off">Faq</button> 
                </div>
            </div>
        </div>
    </section>
    
    <section class="paralax-faq">
        <div class="container">
            <div class="faq-container">
                <h1><strong>Encontre aqui</strong> as perguntas e respostas</h1>

                <!--faq--> 
                 <ul class="accordion">
                                         
                     <div class="row">
                         <?php while ( $faq->have_posts() ) { $faq->the_post(); global $post; ?>     
                        <div class="grid-6">
                            <li class="">
                                <a><?php the_field('pergunta-faq'); ?></a>
                                <p><?php the_field('resposta-faq'); ?></p>
                            </li>
                        </div>
                        <?php } ?>
                    </div>
                    
                </ul>      
            </div>
        </div>
    </section>
    

    

<?php get_footer(); ?>