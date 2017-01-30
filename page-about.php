<?php 

/*
  Template Name: About Page
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

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

<div class ="title-block">
	
	<div class ="container">
		<h1>ME</h1>
		<h3>YOUR LOCAL WEB DEVELOPER</h3>
	
	</div>
</div>

<div class ="about">

	<div class ="container">

		<div class ="about-me">
			
			<h2>A LITTLE BIT ABOUT <span>ME</span></h2>
				<?php the_content(); ?>
			
		</div>

		<div class ="about-image">

			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/me-bw.jpg" alt="personal photo" />
		
		</div>
		
	</div>

</div>

<?php endwhile; endif; ?>	


<div class ="why-choose">

	<h3>WHY <span>CHOOSE</span> ME</h3>

	<ul>
		<li><i class ="pe-7s-star"></i>local business</li>
		<li><i class ="pe-7s-star"></i>quality work</li>
		<li><i class ="pe-7s-star"></i>up-to-date in best practices</li>
		<li><i class ="pe-7s-star"></i>code school graduate</li>
		
	</ul>

</div>


<?php get_footer(); ?>
