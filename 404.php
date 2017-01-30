<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package coldwatercode
 */

get_header(); ?>



<div class="error404 not-found">

<div class = "bg-image">

    <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/coldwatercode/img/black-white-barrel.jpg" alt="coldwatercode hero" />
</div> 

   <div class ="content404">

   		<div class ="container">

	   		<h1 class = "entry-title"><?php _e( 'PAGE NOT FOUND', 'coldwatercode' ); ?></h1>

		   <p><?php _e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for', 'coldwatercode' ); ?></p>

		   <h2>404</h2>
	
		</div> <!-- /.container -->
		
   </div>

</div> <!-- /.error404-->

<?php get_footer(); ?>