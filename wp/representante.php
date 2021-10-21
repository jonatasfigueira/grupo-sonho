<?php
/*
Template Name: Representante
*/
if(is_page()){
    get_header('new');
}
else{
    get_header(); 
}

wp_head();

?>  
    <section class="representante-page paralax-representante"> 
        <div class="container">
            <div class="grid-2 representante-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/representante-girl.png" alt="Sonho de Nenê - Representante">
            </div>
            <div class="grid-5 representante-qualidade">
                <div class="representante-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/representante-qualidade.png" alt="Qualidade Sonho de Nenê">
                    <h2>Qualidade</h2>
                </div>
                <div class="representante-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/representante-confianca.png" alt="Confiança Sonho de Nenê">
                    <h2>Confiança</h2>
                </div>
                <div class="representante-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/representante-variedade.png" alt="Variedade Sonho de Nenê">
                    <h2>Variedade</h2>
                </div>
            </div>
            <div class="grid-5 representante-sobre">
                <h1><strong>Representante</strong></h1>
                <p><strong>A Sonho de Nenê enxerga seus representantes como uma extensão da própria marca, valorizando uma relação de parceria com cada um deles.
Essa mentalidade faz com que a empresa ofereça atrativos como um serviço de atendimento diferenciado, que busca atender toda e qualquer necessidade de seus parceiros, além de programas de incentivo e um sistema de comissionamento muito superior aos padrões de mercado atual.</strong><br>Tudo isso para que, em uma relação vantajosa para todas as partes, a tradição e qualidade comprovada dos produtos Sonho de Nenê atinjam o maior público possível.</p>  
                <div class="btn-default"><a href="#cadastrarrep">Cadastrar</a></div>
            </div>
        </div>
    </section>
    
    <section class="representante-faq">
        <div class="container">
            <div class="grid-5 representante-faq-content">
                <h1><strong>Faq</strong></h1>
                <p><strong>Separamos aqui algumas dúvidas mais frequêntes sobre nossos produtos e unidades.</strong> </p>
                <div class="btn-default"><a href="/faq" alt="Dúvidas frequêntes">Dúvidas Frequêntes</a></div>
            </div>
        </div>
    </section>
    
    <section class="paralax-representante-form" id="cadastrarrep">
        <div class="container">
            <div class="representante-cadastro-titulo">
                <h1>Seja um <strong>Representante</strong></h1>
            </div>
            <div class="representante-cadastro-form ">
 <?php echo do_shortcode('[contact-form-7 id="426" title="Representante" html_class="use-floating-validation-tip"]');?>    
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>