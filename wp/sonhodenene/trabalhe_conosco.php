<?php
/*
Template Name: Trabalhe Conosco
*/
if(is_page('trabalhe-conosco')){
    get_header('new');
}
else{
    get_header(); 
}

wp_head();

?>
    
    <section class="job-page paralax-job"> 
        <div class="container">
            <div class="grid-12 job-texto">
                <h1>Trabalhe<strong>Conosco</strong></h1> 
                <p><strong>A Sonho de Nenê enxerga seus representantes como uma extensão da própria marca, valorizando uma relação de parceria com cada um deles. Essa mentalidade faz com que a empresa ofereça atrativos como um serviço de atendimento diferenciado, que busca atender toda e qualquer necessidade de seus parceiros, além de programas de incentivo e um sistema de comissionamento muito superior aos padrões de mercado atual.</strong> <br> Tudo isso para que, em uma relação vantajosa para todas as partes, a tradição e qualidade comprovada dos produtos Sonho de Nenê atinjam o maior público possível.</p>                
            </div>
            <!-- <div class="grid-4 job-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/job-criatividade-icon.png" alt="Criatividade Sonho de Nenê">
                <h2>Criatividade</h2>
                <p>Texto sobre criatividade para resolver problemas.</p>
            </div>
            <div class="grid-4 job-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/job-produtividade-icon.png" alt="Produtividade Sonho de Nenê">
                <h2>Produtividade</h2>
                <p>Texto sobre proatividade e trabalho em equipe.</p>
            </div>
            <div class="grid-4 job-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/job-competencia-icon.png" alt="Competência Sonho de Nenê">
                <h2>Competência</h2>
                <p>Texto sobre competência e resultados.</p>
            </div> -->
 
        </div>
    </section>
    
    <section class="job-content">
        <div class="container">
            <div class="job-cadastro-titulo">
                <h1>Trabalhe <strong>Conosco</strong></h1>
            </div> 
            <div class="job-cadastro-form">
                <?php echo do_shortcode('[contact-form-7 id="1611" title="Trabalhe conosco" html_class="use-floating-validation-tip"]');?>   
            </div>
        </div>
    </section>
<!--
    
    <section>
        <div class="job-parceiros">
            <div class="container">
                <h1>Nossos<strong>Parceiros</strong></h1>
            </div>
        </div>
    </section>
  
-->
<?php get_footer(); ?>