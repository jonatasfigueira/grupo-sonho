<?php

add_action ('after_setup_theme', 'custom_setup');

function custom_setup()
{
	add_filter ( 'show_admin_bar', '__return_false' );
	add_action ('init', 'custom_init');
}

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Menu
// Habilitar Menus

add_theme_support('menus');

// Diferentes tamanhos de imagens

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'titulo', 1400, 560, true );
	add_image_size( 'titulo_m', 800, 560, true );
}

// Scripts
function sn_scripts() {
  // Carregando CSS header
  //  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation.min.css' );
  //  wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
  wp_enqueue_style( 'font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
  // wp_enqueue_style( 'ionicons','https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );

            
 // Carregando Scripts header
 	wp_register_script( 'modernizr', get_template_directory_uri().'/js/modernizr.js', array('jquery'), '', true );
 	wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js' ), false, null, true );
	wp_enqueue_script( 'jquery' );
      
  //Carregando no footer
    //wp_enqueue_script('googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCvGUu_-V0D-LyLJWqNMcoYComCffiqng0&callback=initMap', array('jquery'), '', true );
    
		wp_enqueue_script('flexslide', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider-min.js', array('jquery'), '', true );
		
		wp_enqueue_script('maskedinput', get_template_directory_uri().'/js/jquery.maskedinput.min.js', array('jquery'), '', true );
		
		wp_enqueue_script('filestyle', get_template_directory_uri().'/js/jquery-filestyle.min.js', array('jquery'), '', true );
		
		wp_enqueue_script('plugin', get_template_directory_uri().'/js/plugin.js', array('jquery'), '', true ); 
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '', true );  

}
add_action( 'wp_enqueue_scripts', 'sn_scripts' );


//Add 

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  
// Diferentes tamanhos de imagens
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'foto_colecao', 1600, 960, true ); 
}


// Modificando o Wordpress para o Cliente


//Custom Contact Form 7 ajax loader
function my_wpcf7_ajax_loader() {
  $ajax_loader_url = get_stylesheet_directory_uri() . '/img/rolling.svg';
	
	return $ajax_loader_url;
}
add_filter('wpcf7_ajax_loader','my_wpcf7_ajax_loader');

// Logo personalizada no Login

function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.png);
			padding-bottom: 20px;
			margin-top: -60px;
			background-size: 300px 300px;
			width: 300px;
			height: 300px;
		}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Definir o que o Cliente pode ver

if ( current_user_can('editor') ) {
	function my_remove_menu_pages() {
		remove_menu_page('index.php');
		remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
	}
	add_action( 'admin_menu', 'my_remove_menu_pages' );

// Retira o Símbolo do Wordpress e dos comentários

	function annointed_admin_bar_remove() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('comments');
	}

	add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
}

// Corrige a questão das colunas no dashboard

function wpse126301_dashboard_columns() {
		add_screen_option(
			'layout_columns',
			array(
				'max'			=> 2,
				'default'	=> 1
			)
		);
}
add_action( 'admin_head-index.php', 'wpse126301_dashboard_columns' );

// Remove link das imagens inseridas com o editor

function rkv_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'rkv_imagelink_setup', 10);


// Opções do Tema

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações Gerais do Tema',
		'menu_title'	=> 'Configuração do Tema',
		'menu_slug' 	=> 'configuracao-gerais-do-tema',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração Pagina Home',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'configuracao-gerais-do-tema',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'configuracao-gerais-do-tema',
	));
	
}

function custom_init()
{
	// Custom post de Slide home
	// $attr = array(
	// 	'public'	=> false,
	// 	'show_ui'	=> true,
	// 	'supports'	=> array('title','thumbnail'),
	// 	'labels'	=> array(
	// 		'name'	=> 'Slide Home',
	// 		'singular_name'	=> 'Slide Home'
	// 	)
	// );
	// register_post_type( CPT_SLIDEHOME, $attr );
	// End custom post de Coleção

    // Custom post de FAQ
	$attr = array(
		'public'	=> false,
		'show_ui'	=> true,
		'supports'	=> array('title','thumbnail'),
		'labels'	=> array(
			'name'	=> 'FAQ - Dúvidas Frequentes',
			'singular_name'	=> 'FAQ - Dúvidas Frequentes'
		)
	);
	register_post_type( CPT_FAQ, $attr );
	// End custom post de Coleção    
}

// ocultar recptcha nas demais páginas
// add_action('wp_print_scripts', function () {
// 	//Add pages you want to allow to array
// 	if ( !is_page( array( 'contato','lojista', 'representante', 'trabalhe-conosco' ) ) ){
// 	 wp_dequeue_script( 'google-recaptcha' );
// 	 //wp_dequeue_script( 'google-invisible-recaptcha' );
// 	}
//  });

// Custom post de Produtos

// add_action('init', 'cptui_register_my_cpt_produtos');
// function cptui_register_my_cpt_produtos() {
// register_post_type('produtos', array(
// 'label' => 'Produtos',
// 'description' => 'Produtos',
// 'public' => true,
// 'show_ui' => true,
// 'show_in_menu' => true,
// 'capability_type' => 'post',
// 'map_meta_cap' => true,
// 'hierarchical' => false,
// 'rewrite' => array('slug' => 'produtos', 'with_front' => true),

// 'query_var' => true,
// 'supports' => array('title','page-attributes','post-formats'),
// 'labels' => array (
// 	'name' => 'Produtos',
// 	'singular_name' => 'Produto',
// 	'menu_name' => 'Produtos',
// 	'add_new' => 'Adicionar Novo',
// 	'add_new_item' => 'Adicionar Novo Produto',
// 	'edit' => 'Editar',
// 	'edit_item' => 'Editar Produto',
// 	'new_item' => 'Novo Produto',
// 	'view' => 'Ver Produto',
// 	'view_item' => 'Ver Produto',
// 	'search_items' => 'Procurar Produtos',
// 	'not_found' => 'Nenhum Produto Encontrado',
// 	'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
// 	'parent' => 'Parent Produto',
// )
// ) ); }

// Final dos custom posts

?>