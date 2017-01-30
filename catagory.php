 
<?php get_header(); ?>

 <div class = "main-title-block">
     <div class ="container">

        
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
        </div>
        
        <h1  class = "entry-title" >Project type : <span><?php single_cat_title(); ?></span></h1>

    </div>

 </div>

<?php if ( have_posts() ) the_post(); ?>

<div class = "archive-results">
<div class="container">
    


<!--   <h1>
    <?php if ( is_day() ) : ?>
      Daily Archives: <span><?php the_date(); ?></span>
    <?php elseif ( is_month() ) : ?>
      Monthly Archives: <span><?php the_date('F Y'); ?></span>
    <?php elseif ( is_year() ) : ?>
      Yearly Archives: <span><?php the_date('Y'); ?></span>
    <?php else : ?>
      <span>Blog Archives</span>
    <?php endif; ?>
  </h1> -->

  <?php rewind_posts(); ?>


   <div class ="portfolio">

    <div class ="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class = 'portfolio-item'>

        <div class="project-title">

          <h3><?php the_title(); ?></h3>

        </div>  

        <div class="project-thumb">

          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

          
          <?php the_excerpt(); ?>

        </div>      
            
      </div>

    <?php endwhile;  ?> 

    </div>

    <div class ="see-more">

      <div class ="container">

        <a href="<?php echo get_page_link(54); ?>"<button>BACK TO ALL PROJECTS</button></a>

      </div>

    </div>

   </div>


    <?php else : ?>

        <h1 class="entry-title">Not Found</h1>
            <div class="not-found">
               <p>Apologies, but no results were found for the requested search. Perhaps searching with a different keyword will help find a related post.</p>

                   <?php get_search_form(); ?>

           </div><!-- not-found -->

    <?php endif; ?> 


</div> <!-- container -->

</div> <!-- /archive-results -->



<?php get_footer(); ?>
