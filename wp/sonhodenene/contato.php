<?php
/*
Template Name: Contato
*/
if(is_page()){
    get_header('new');
}
else{
    get_header(); 
}

wp_head();

?>
<!-- Colocar o conteúdo da página abaixo -->
    <section class="contato-page paralax-contato"> 
        <div class="container">
            <div class="contato-form">
                <h1><strong>Contato</strong></h1>
                <?php echo do_shortcode('[contact-form-7 id="29" title="Contato Pagina" html_class="use-floating-validation-tip"]');?>    
            </div> 
        </div>
    </section>
    
    <section id="mapid">
        <address>Rua Capitão Dé, 696. Indianópolis. Caruaru-PE</address> 
    </section>
    
<?php get_footer(); ?>