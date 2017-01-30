<?php 

/**
*
  Template Name: Portfolio Page
*/

get_header();  ?>


<?php

$args = array(
  'post_type' => 'portfolio'
);

$the_query = new WP_Query( $args );

?>

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

<div class ="title-block">
	
	<div class ="container">	
	
		<h1>PORTFOLIO</h1>
		
		<h3>I MADE THESE</h3>
	
	</div>

</div>

<div class ="portfolio">

	<div class ="container">

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class = 'portfolio-item'>

			<div class="project-title">

				<h3><?php the_title(); ?></h3>

			</div>	

			<div class="project-thumb">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

				
				<?php the_excerpt(); ?>

			</div>			
					
		</div>

	<?php endwhile; endif; ?>	

	</div>

</div>

<?php get_footer(); ?>