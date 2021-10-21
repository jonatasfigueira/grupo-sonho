<?php
/*
Template Name: Estrelinha Sonho
*/
if(is_page()){
    get_header('new');
}
else{
    get_header(); 
}
wp_head();
?>
    
    
    <section class="estrelinha-faq">
        <div class="container">
            <div class="grid-5 logista-faq-content">
                <h1><strong>Estrelinha Sonho</strong></h1>
                <p><strong>Venha Fazer parte da turminha Sonho de Nenê. Cadastre seu filho e participe da seleção de modelinhos Sonho.</strong> </p>
                <div class="btn-default"><a href="#cadastrarestrelinha" alt="Dúvidas Frequêntes">Realizar cadastro</a></div>
            </div>
        </div>
    </section>
    
    <section class="paralax-estrelinha-form" id="cadastrarestrelinha">
        <div class="container">
            <div class="logista-cadastro-titulo">
                <h1><strong>Cadastro</strong></h1>
            </div>
            <div class="estrelinha-cadastro-form">
 <?php echo do_shortcode('[contact-form-7 id="3081" title="Estrelinha Sonho" html_class="use-floating-validation-tip"]');?>    
            </div>
        </div>
    </section>
<?php get_footer(); ?>