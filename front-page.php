<?php
/** 
* Front Page File * 
* 
* Template Name: Front Page
*
* This file is used to display the front page of the site. This is inherent in the naming of the file
* Learn more: http://codex.wordpress.org/Template_Hierarchy 
* 
* @package coldwatercode
*/

?>

<?php get_header(); ?>

<?php

$args = array(
  'post_type' => 'services'
);
$the_query = new WP_Query( $args );

?>


<div class ="title-block">

	<div class ="container">
		
		<h1>SERVICES</h1>
		<h3>WHAT I DO</h3>

	</div>
	
</div>

<div class = "services content-wrapper">

	<div class ="container">


		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class = "indiv-service">

				<div class = "service-icon">

					<i class="<?php the_field('service_icon') ?>"></i> 

				</div>

				<div class ="service-description">

					<h3><?php the_title() ?></h3>
						<?php the_content() ?>

				</div>

			</div>

		<?php endwhile; endif; ?>

	</div>

</div>
<?php rewind_posts(); ?>


		<?php

		$args = array(
		  'post_type' => 'portfolio',
		  'category_name' => 'featured'
		);
		$the_query = new WP_Query( $args );

		?>

<div class ="title-block">

	<div class ="container">	

		<h1>PORTFOLIO</h1>
		<h3>RECENT PROJECTS</h3>

	</div>

</div>

<div class ="front-portfolio content-wrapper">

	<div class ="container">

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class = 'front-portfolio-item'>

		<!-- 	<div class="project-title">

				<h3><?php the_title(); ?></h3>
				
			</div>	 -->

			<div class="project-thumb">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			</div>	
					
		</div>

	<?php endwhile; endif; ?>	

	</div>

	<div class ="see-more">



			<a href="<?php echo get_page_link(54); ?>"<button>SEE MORE PROJECTS</button></a>



	</div>

</div>



<div class ="title-block ">

	<div class ="container">	

		<h1>TESTIMONIALS</h1>
		<h3>WHAT CLIENTS SAY</h3>

	</div>

	<div class="testimonials content-wrapper">

		<h3 class ="coming-soon">COMING SOON</h3>

	</div>

	

</div>


<?php get_footer(); ?>