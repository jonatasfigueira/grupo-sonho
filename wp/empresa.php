<?php
/*
Template Name: Empresa
*/
if(is_page()){
    get_header('new');
}
else{
    get_header(); 
}
wp_head();
?>
    <section class="sobre-page">
        <div class="container">
            <div class="row">
                <div class="grid-6 texto-sobre">
                    <h1>Sobre <strong>Nós</strong></h1>
                    <p>Há 23 anos, nascia um sonho. Era início de um trabalho que colheria muitos frutos e se realizaria com o sucesso.
    A Sonho de Nenê foi criada com objetivo que se estrutura em duas vertentes: produzir roupas infantis que proporcionem conforto e segurança para as crianças.
    Para alcançar esse objetivo, priorizamos valores como a dedicação, respeito, estudo, orgulho e, acima de tudo, gosto pelo que faz. Isso porque queremos retribuir com maestria a confiança que você, que tem um bebê, deposita na nossa marca.</p>
                </div>
                <div class="grid-6">
                    <div class="imagem-sobre">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sobre1.jpg" alt="Sonho de Nenê">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid-6">
                    <div class="imagem-sobre">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sobre2.jpg" alt="Sonho de Nenê">
                    </div>
                </div>
                <div class="grid-6 texto-sobre">
                    <p>O carinho e o cuidado com o seu filho continuam os mesmos e, por isso, criamos um canal exclusivo para falar com os papais, mamães e futuros clientes. A Sonho de Nenê terá o prazer em receber comunicados, sugestões ou dúvidas que possam ajudar a desenvolvA incansável busca pelo aprimoramento proporcionou à Sonho de Nenê um reconhecimento em excelência de qualidade. Seus produtos são fabricados com tecido e malha antialérgica 100% algodão, tudo para garantir segurança, saúde e conforto. Esse trabalho resultou em um grande crescimento ao longo dos anos, conquistando a confiança e a admiração de clientes em várias regiões do Brasil. Essa gratidão serve de combustível para o nosso trabalho. Serve de inspiração.
                    De necessidade em buscar o melhor para o seu bebê, sempre. Sonho de Nenê. Cuidando bem do seu maior sonho.er melhor as suas roupinhas, mantendo sempre o padrão de qualidade que todos conhecem.</p>
                </div>
            </div>            
        </div>
    </section>

    <section>
        <div class="container">
            <div class="grid-12 titulo-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-titulo.png" alt="Sonho de Nenê"> 
                <h1>Nossos <strong>Sonhos</strong></h1>
            </div>
            <div class="row sobre-valores">
                <div class="grid-4">
                    <div class="valores-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/coracao-icon.png" alt="Missões da Sonho de Nenê">
                        <h3>Missão</h3>
                        <p>Estar presente na vida da criança e da família, através de experiências únicas de cuidado e carinho, garantindo o desenvolvimento humano e social.</p>
                    </div>
                    <div class="valores-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balao-icon.png" alt="Valores da Sonho de Nenê">
                        <h3>Valores</h3>
                        <ul>
                            <li>Respeito ao cliente</li>
                            <li>Compromisso com o resultado</li>
                            <li>Conduta Ética</li>
                            <li>Inovação</li>
                            <li>Valorização das pessoas</li>
                            <li>Trabalho em equipe</li>
                        </ul>
                    </div>                         
                </div>
                <div class="grid-4 bg-sobre">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-mulher.png" alt="Sonho de Nenê">            
                </div>
                <div class="grid-4">
                    <div class="valores-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/flor-icon.png" alt="Vissões da Sonho de Nenê">
                        <h3>Visão</h3>
                        <p>Ser a marca preferida no segmento, oferecendo produtos acessíveis com tendência e sofisticação.</p>                           
                    </div>                    
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>