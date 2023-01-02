<?php
/*Template name: Training*/
?>

<?php get_header();?>

                        <!-- Header adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_top_slot_ad' );?>
                        <!-- End Featured Post-->

                        <!-- Post Block 1-->
                        <?php get_template_part('includes/section','block_1');?><hr class="container">
                        <!-- End of Post Block--> 

                        <!-- Header middle adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_middle_slot_ad' );?>
                        <!-- End Header middle adslot-->
                                    
                        <!-- Post Block 2-->
                        <?php get_template_part('includes/section','block_2');?><hr class="container">
                        <!-- End of Post Block-->

                        <!-- Header bottom adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_bottom_slot_ad' );?>
                        <!-- End Header bottom adslot-->

                        <!-- Post Block 3-->
                        <?php get_template_part('includes/section','block_3');?><hr class="container">
                        <!-- End of Post Block--> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>