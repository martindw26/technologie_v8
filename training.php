<?php
  get_header();
 /*Template name: Training*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">
	
          <div class="col-lg-8 p-lg-2 bg-white text-dark">


            <h1 class=" display-2 font-weight-bold text-dark" style=""><?php echo esc_html( get_the_title() );?></h1>

				<!-- Social share icons-->
				<?php $enable_in_article = get_field('on_article','option');?>
				<?php if($enable_in_article):?>
					<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->


             <!-- header image block-->
                                                
                        <!-- Header adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_top_slot_ad' );?>
                        <!-- End Featured Post-->

                        <!-- Post Block 1-->
                        <?php get_template_part('template-parts/block_1');?><hr class="container">
                        <!-- End of Post Block--> 

                        <!-- Header middle adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_middle_slot_ad' );?>
                        <!-- End Header middle adslot-->

             <!-- Social share icons-->
             <?php $enable_in_article = get_field('on_article','option');?>
             <?php if($enable_in_article):?>
             <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
             <?php else:?>
             <?php echo '<style>{ display:none;}</style>';?>
             <?php endif;?>
              <hr>
             <!-- End Social share icons-->

              	
             <!-- Start of posts related posts-->
             <?php get_template_part( 'template-parts/related_new' );?>
             <!-- End of posts related posts-->

          </div>

                        <div class="sidebar col-lg-4 col-md-4">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts sidebar related posts-->                         
	     </div>




      </div>               

</div>