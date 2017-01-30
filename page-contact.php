<?php 

/*
  Template Name: Contact Page
*/

get_header();  ?>
 

 <div class = "main-title-block">

	<div class ="container">

 		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	 	    <?php if(function_exists('bcn_display'))
	 	    {
	 	        bcn_display();
	 	    }?>
	 	</div> 
	 	
	 	<h1 class = "entry-title"><?php the_title(); ?></h1>

	</div>

 </div>


 <div class = "contact-info">

	 <div class ="container">
	 	
	 	<p><i class="pe-7s-phone"></i><a href="tel:1-250-726-4108">1-250-726-4108</a></p>
	 	<?php 
	 	    $content = "hello@coldwaterwebdesign.com"; 
	 	    $args = array('text' => '',
	 	                              'css_class' => '',
	 	                              'css_id' => '',
	 	                              'echo' => 1); 
	 	    if (function_exists('encryptx')) { 
	 	        encryptx($content, $args); 
	 	    } else { 
	 	        echo sprintf('<p><i class="pe-7s-mail-open-file"></i><a href="mailto:%s" id="%s" class="%s">%s</a></p>', $content, $args['css_id'], $args['css_class'], ($args['text'] != '' ? $args['text'] : $content)); 
	 	    } 
	 	?>
	 	<p><i class="pe-7s-map-marker"></i>Tofino, British Columbia, Canada</p>

	 </div>

 </div>

 <div class ="map-form-wrapper">

	 <div class = "map">

	 	<?php the_field('map_shortcode'); ?>

	 </div>

	 <div class ="contact-form">

	 	<h3>CONTACT <b>ME</b></h3>

	 	<?php the_field('contact_form'); ?>
	 	
	 </div>
 	

 </div>


	



<?php get_footer(); ?>
