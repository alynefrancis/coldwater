<?php get_header();  ?>


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
<!-- 
<div class ="title-block">

	<div class ="container">	

	</div>
	
</div> -->
<div class ="full-portfolio">	

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

		<div class="project-title">

			<div class="container">
				<h3><?php the_field('project_intro') ?></h3>
			</div>			

		</div>

		<div class = "home-page-img">



			<div class ="container">

			
			
			<?php the_post_thumbnail(); ?>

			</div>

		</div>

		<div class = 'full-portfolio-item'>

		

			<div class ="container">

				<div class = "project-description">

					<h3>ABOUT THE PROJECT</h3>

						<?php the_content(); ?>

						<p><span>DEV INFO: </span><?php the_field('dev_info'); ?></p>

				</div>		
		
				<div class = "project-details">

					<h3>DETAILS</h3>

					<p><span>DATE: </span><?php the_field('project_date'); ?></p>
					<p><span>CLIENT: </span><?php the_field('project_client'); ?></p>
					<p><span>URL: </span><?php the_field('site_url'); ?></p>
					<a href="<?php the_field('site_url'); ?>"><button>VIEW LIVE SITE</button></a>
				</div>

			</div>

		</div>

	<?php endwhile; endif; ?>	

	<div class = "portfolio-nav">

		<div class ="container">

			<nav id="nav-below">
			    <div class="nav-previous"><?php previous_post_link( '%link', '&larr; %title ',  __( 'Previous', 'afrancis' ) ); ?></div>
			    <div class="nav-next"><?php next_post_link( '%link', '%title &rarr;' , __( 'Next', 'afrancis' ) ); ?></div>
			</nav>

		</div>

	</div>



<?php get_footer(); ?>