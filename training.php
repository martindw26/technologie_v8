<?php
  get_header();
/*Template name: Training*/
?>  

<div class="container">
        <div class="row">
            <div class="col-lg-8 p-lg-2">
                <div class="col-md">
                    <div class="container mt-3 border-border border-0 p-3 rounded">
                    <h2 class="p-2 text-dark"><?php the_field( 'trainingblock1title' );?></h2>
                            <!-- Post Block 1-->
                            <?php get_template_part('template-parts/block_1');?>
                            <!-- End of Post Block--> 
                        <br>
                    </div>
                </div>
            </div>	

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

<?php get_footer();?>