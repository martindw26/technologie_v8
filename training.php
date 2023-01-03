<?php
  get_header();
/*Template name: Training*/
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

          <?php if (have_posts()) : ?>

             <!-- SEO text-->

             <div class=" bg-secondary text-light p-4 mb-4 border-dark lead">
             	<div><?php echo category_description(); ?></div> 
             </div>


          <?php while (have_posts()) : the_post(); ?>

        <div class="col-md">



<div class="container mt-3 border-border border-0 shadow-sm p-3 mb-5 bg-body rounded">

<!-- Post Block 1-->
<?php get_template_part('template-parts/block_2');?><hr class="container">
<!-- End of Post Block--> 

<br>
  </div>
</div>

        </div>	
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata();?>

          </div>

                        <div class="sidebar col-lg-4 col-md-4 p-2">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/generic_sidebar' );?>
		   <!-- End of posts sidebar related posts-->        
                        </div>

      </div>               

</div>

<?php get_footer(); ?>