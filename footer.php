

<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package coldwatercode
 */
?>

</div><!-- #main -->
	
</div><!-- #page -->

<footer id="colophpone" role="contentinfo">

	<div class="container">

		<div class="footer-contact">

			<ul>
				<li><i class="pe-7s-call"></i><a href="tel:1-250-726-4108">1-250-726-4108</a></li>
				<?php 
				    $content = "hello@coldwaterwebdesign.com"; 
				    $args = array('text' => '',
				                              'css_class' => '',
				                              'css_id' => '',
				                              'echo' => 1); 
				    if (function_exists('encryptx')) { 
				        encryptx($content, $args); 
				    } else { 
				        echo sprintf('<li><i class="pe-7s-mail-open-file"></i><a href="mailto:%s" id="%s" class="%s">%s</a>', $content, $args['css_id'], $args['css_class'], ($args['text'] != '' ? $args['text'] : $content)); 
				    } 
				?>
				<li><i class="pe-7s-map-marker"></i>Tofino, British Columbia. Canada</li> 

				<li><i class="fa fa-facebook aria-hidden="true""></i><i class="fa fa-twitter aria-hidden="true""></i><i class="fa fa-instagram aria-hidden="true""></i><i class="fa fa-github-alt" aria-hidden="true"></i></li>

				
			</ul>
		</div> <!-- footer-left -->

				
		<div class="footer-links">
		
			 <nav class="footer-navigation" role="navigation">

		        <?php wp_nav_menu( array(
              	'container' => false,
              	'theme_location' => 'primary'
            	)); ?>

            </nav>
			
			
		</div> <!-- footer-right -->

		<div class="footer-instagram">

			<div class="widget-area" role="complementary">

			    <?php dynamic_sidebar( 'footer-widget' ); ?>

			</div><!-- .widget-area -->
		</div>

	</div>


</footer> <!-- footer-background -->

<div class ="copyright-wrapper">

	<div class ="container">

		<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.<br>  Website built by yours truly</p>

	</div>

</div>

<?php wp_footer(); ?> 

</body>

</html>