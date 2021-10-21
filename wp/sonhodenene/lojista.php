<?php
/*
Template Name: Lojista
*/
if(is_page()){
    get_header('new');
}
else{
    get_header(); 
}

wp_head();

?>
    <section class="lojista-page paralax-lojista">
        <div class="overlay"></div>
        <div class="container">
            <div class="grid-2 lojista-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lojista-boy2.png" alt="Sonho de Nenê - Lojista">
            </div>
            <div class="grid-5 lojista-qualidade">
                <div class="lojista-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lojista-amor.png" alt="Amor Sonho de Nenê">
                    <h2>Amor</h2>
                </div>
                <div class="lojista-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lojista-fofura.png" alt="Fofura Sonho de Nenê">
                    <h2>Fofura</h2>
                </div>
                <div class="lojista-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lojista-garantia.png" alt="Garantia Sonho de Nenê">
                    <h2>Garantia</h2>
                </div>
            </div>
            <div class="grid-5 lojista-sobre">
                <h1><strong>Lojista</strong></h1>
                <p><strong>A importância do lojista para a Sonho de Nenê é enorme. Tendo em vista o papel que as lojas parceiras exercem em seu negócio, a marca faz questão de dar total respaldo às necessidades de cada um.</strong><br>Desde materiais exclusivos de divulgação e ponto-de-venda, até um eficiente canal de comunicação que atende demanda, dúvidas ou sugestões, para que a tradição e qualidade dos produtos Sonho de Nenê estejam sempre presente nas prateleiras.</p>  
                <div class="btn-default"><a href="#cadastrarlojista">Cadastrar</a></div>
            </div>
        </div>
    </section>
    
    <section class="lojista-faq">
        <div class="container">
            <div class="grid-5 logista-faq-content">
                <h1><strong>Faq</strong></h1>
                <p><strong>Separamos aqui algumas dúvidas mais frequêntes sobre nossos produtos e unidades.</strong> </p>
                <div class="btn-default"><a href="/faq" alt="Dúvidas Frequêntes">Dúvidas Frequêntes</a></div>
            </div>
        </div>
    </section>
    
    <section class="paralax-lojista-form" id="cadastrarlojista">
        <div class="container">
            <div class="logista-cadastro-titulo">
                <h1><strong>Cadastro</strong></h1>
            </div>
            <div class="lojista-cadastro-form">
 <?php echo do_shortcode('[contact-form-7 id="428" title="Lojista" html_class="use-floating-validation-tip"]');?>    
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>