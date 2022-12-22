<?php
/*Template name: Front-Page*/
?>

<?php get_header();?>

                        <!-- Header adslot-->
                        <?php get_template_part( 'landing_page_ads/homepage_header_top_slot_ad' );?>
                        <!-- End Featured Post-->

                        <!-- Post Block 1-->
                        <?php get_template_part('includes/section','non_featured_reviews');?><hr class="container">
                        <!-- End of Reviews Post Block--> 

                        <!-- Header middle adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_middle_slot_ad' );?>
                        <!-- End Header middle adslot-->
                                    
                        <!-- Projects Post Block-->
                        <?php get_template_part('includes/section','non_featured_projects');?><hr class="container">
                        <!-- End of Projects Post Block-->

                        <!-- Header bottom adslot-->
                        <?php get_template_part( 'template-parts/landing_page_ads/homepage_header_bottom_slot_ad' );?>
                        <!-- End Header bottom adslot-->

                        <!-- Projects Post Block-->
                        <?php get_template_part('includes/section','homepage_deals_block');?>
                        <!-- End of Projects Post Block-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>