    <div class="container footer-animation">
        <span class="footerAnima" id="footerAnima01"></span>
        <span class="footerAnima" id="footerAnima02"></span>
        <span class="footerAnima" id="footerAnima03"></span>
        <span class="footerAnima" id="footerAnima04"></span>
        <span class="footerAnima" id="footerAnima05"></span>
        <span class="footerAnima" id="footerAnima06"></span>
        <span class="footerAnima" id="footerAnima07"></span>
    </div>
    <footer class="tag-footer">
        <div class="container">
            <div class="grid-3 footer-content">
                <h1>Sonho de Nenê</h1>
                <?php 
                    wp_nav_menu( array(
                    'menu' => 'footer 1',
                    'theme_location' => 'footer1',
                    'container' => 'div',
                    'container_class' => 'classe_do_container', //classe_do_container
                    'container_id' => 'id_do_container', //id_do_container
                    'menu_class' => 'classe_do_menu', //classe_do_menu
                    'echo' => true,
                    'menu_id' => '', //id_do_menu
                    'before' => "",
                    'after' => "",
                    'link_before' => "",
                    'link_after' => "",
                    'depth' => 0,
                    'walker' => "",
                    ) );                    
                ?>
                <h1>Informações Úteis</h1>
                <?php 
                    wp_nav_menu( array(
                    'menu' => 'footer 2',
                    'theme_location' => 'footer2',
                    'container' => 'div',
                    'container_class' => 'classe_do_container', //classe_do_container
                    'container_id' => 'id_do_container', //id_do_container
                    'menu_class' => 'classe_do_menu', //classe_do_menu
                    'echo' => true,
                    'menu_id' => '', //id_do_menu
                    'before' => "",
                    'after' => "",
                    'link_before' => "",
                    'link_after' => "",
                    'depth' => 0,
                    'walker' => "",
                    ) );                    
                ?>
            </div>
            <div class="grid-3 footer-content">
                <!-- <h4><i class="fas fa-circle fa-xs"></i><i class="fas fa-circle fa-xs"></i>Contato<i class="fas fa-circle fa-xs"></i><i class="fas fa-circle fa-xs"></i></h4> -->
                <!-- <h1>Horário de <strong>Atendimento</strong></h1> -->
                <h1>Atendimento</h1>
                <h5>(81)3722-0835</h5>
                <h5>Das 07:00 às 17: 00h<span>de segunda à sexta.<span></h5>
                <p>O carinho e o cuidado com o seu filho continuam os mesmos e, por isso, criamos um canal exclusivo para falar com os papais, mamães e futuros clientes. Teremos o prazer em receber comunicados, sugestões ou dúvidas.</p> 

                <div class="btn-contato"><a href="https://sonhodenene.com.br/contato/" target="_parent">Contato</a></div> 
                
            </div>
            <div class="grid-3 footer-content">
                    <h1>Fale Conosco</h1>
                    <?php 
                        wp_nav_menu( array(
                        'menu' => 'footer 3',
                        'theme_location' => 'footer3',
                        'container' => 'div',
                        'container_class' => '', //classe_do_container
                        'container_id' => '', //id_do_container
                        'menu_class' => '', //classe_do_menu
                        'echo' => true,
                        'menu_id' => '', //id_do_menu
                        'before' => "",
                        'after' => "",
                        'link_before' => "",
                        'link_after' => "",
                        'depth' => 0,
                        'walker' => "",
                        ) );                    
                    ?>
                    
                    <ul class="redes-footer"><h1>Redes</h1>
                        <li><a href="https://facebook.com/sonhodenene" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a></li>
                        <li><a href="https://instagram.com/sonhodenene" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ig.png"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC9m3fEfSajEucZ_PRfEPX5g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/yt.png"></a></li>
                        <li><a href="https://br.pinterest.com/sonhodenene" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pt.png"></a></li>
                    </ul>  
                </div>            
           <div class="grid-3 footer-img">  <!-- offset-1  -->
                <img class="footer-l" src="<?php echo get_template_directory_uri(); ?>/img/bg-frase-footer-l.png" alt="Nosso Maior Sonho é te Ver Sempre Feliz">
                <img class="footer-m-s" src="<?php echo get_template_directory_uri(); ?>/img/bg-frase-footer-m-s.png" alt="Nosso Maior Sonho é te Ver Sempre Feliz">
            </div>        
        </div>
        <div class="container">
            <div class="news-content">
                <h2>Fique por dentro de tudo que acontece por aqui!</h2>
                <div id="mc_embed_signup">
                    <form class="news-form" action="https://sonhodenene.us11.list-manage.com/subscribe/post?u=62f2c09ff0825edc26df80e65&amp;id=13c8cf649f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div class="inputWithIcon inputIconBg" id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Seu e-mail" required>
                            <input type=submit class="btn-news" value="Assinar" name="subscribe" id="mc-embedded-subscribe"><i class="fas fa-caret-right" aria-hidden="true"></i>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
 
        <div class="container copyright">
            <div class="grid-12">
                <p>© 2018 - www.<strong>Sonnhodenene</strong>.com - Todos os direitos reservados</p>
            </div> 
        </div>         
    </footer>
	<!-- Footer do Wordpress -->

	<?php wp_footer(); ?>

	<!-- Footer do Wordpress -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134123058-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134123058-1');
</script>

</body>

</html>