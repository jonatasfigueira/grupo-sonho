<?php 

/*
Template Name: Diamond FlipBook
*/

$cat=get_post_meta(get_the_ID(), 'category_for_templatebook',true);
$config=q5_get_settings_category($cat);
$global_setting=get_option('q5_global');


?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    <!-- viewport -->
    <?php if( $config['viewport']=='true' ){ ?>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php } ?>
   
    <!-- title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
        
        
    <!-- BEGIN CSS AND SCRIPT -->    
        
    <!-- add css and js in template -->
    <link rel="stylesheet" href="<?php echo q5_BOOK_URL ?>css/style.css" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">
    <script src="<?php echo q5_BOOK_URL ?>js/jquery.js"></script>
    <script src="<?php echo q5_BOOK_URL ?>js/jquery_no_conflict.js"></script>
    <!-- turnjs -->
    <?php 
	   $link_turnjs=$global_setting['library_turnjs'];
	   if( strlen ($link_turnjs) > 3 ){
		   ?>
           <script src="<?php echo $link_turnjs ?>"></script>              
		   <?php  
	   }else{
	   ?>
       <script>
	      alert('No turnjs library. Go to the admin panel and menu "Diamond Book / Settings".There is the field "Link to library turnjs".');
	   </script>
    <?php }
	?>
	<!-- end turnjs -->
    <script src="<?php echo q5_BOOK_URL ?>js/wait.js"></script>
    <script src="<?php echo q5_BOOK_URL ?>js/jquery.mousewheel.js"></script>
	<script src="<?php echo q5_BOOK_URL ?>js/jquery.fullscreen.js"></script>
    <script src="<?php echo q5_BOOK_URL ?>js/jquery.address-1.6.min.js"></script>
	<script src="<?php echo q5_BOOK_URL ?>js/onload.js"></script>
    
    <!-- END CSS AND SCRIPT -->  




	<style>
    html, body {
        margin: 0;
        padding: 0;
		overflow:auto !important;
    }
    </style> 
      
	<?
    //wp_head();
    ?>
</head>
 
<body>
  
  
  <?php
    //add flipbook 
    do_shortcode("[".q5_SHORTCODE." is_as_template='true' cat=".$cat."]");
  
  ?>


</body>
</html>







