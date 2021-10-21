<?php
/*
Template Name: Coleção
*/
if(is_page()){
    get_header('colecao');
}
else{
    get_header(); 
}

wp_head();
?>

<?php if ( have_posts() ): ?> 
    <?php while ( have_posts() ) : the_post(); ?>

	<!-- Site Header -->
	<!-- <div id="topo">
		<h4 id="tagline"><?php the_field('nome_da_colecao'); ?></h4>
	</div> -->

	<div id="maincolecao">
		<!-- Site Footer -->
		<div id="socialmidia">
			<div id="soc_links">
				<ul>
					<li class="soc_icon_link"><a href="https://facebook.com/sonhodenene"><i class="fa fa-facebook"></i></a></li>
					<li class="soc_icon_link"><a href="https://instagram.com.br/sonhodenene"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="soc_icon_link"><a href="#"><i class="icon-gplus-1"></i></a></li>
					<li class="soc_icon_link"><a href="https://www.youtube.com/channel/UC9m3fEfSajEucZ_PRfEPX5g"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>	
	</div>	 

    <div id="bg_slideshow">
        <?php 

        $images = get_field('fotos');

        if( $images ): ?>
        <ul id="bg_slides" class="slides">
            <?php foreach( $images as $image ): ?>
            <li style="background-image: url(<?php echo $image['url']; ?>)"></li>  
            <?php endforeach; ?>
        </ul>
        <?php endif; ?> 
    </div>
    
    <div id="bg_slides_controls">
        <?php 

        $images = get_field('fotos');
        
        if( $images ): ?>
        
		<a href="#" id="bg_slides_prev" class="bg_slides_nav"></a>
        <?php foreach( $images as $image ): ?>
		<span class="slider_pages"></span> 
        <?php endforeach; ?>
		<!--<span class="slider_pages"></span> -->
		<a href="#"  id="bg_slides_next" class="bg_slides_nav"></a>
        <?php endif; ?> 
	</div> 

    <?php endwhile; ?>
<?php endif; ?> 



<?php
/*
Template Name: Coleção
*/
if(is_page()){
    get_footer('colecao');
}
else{
    get_footer(); 
}
?> 