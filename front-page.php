<?php
/*Template name: Front-Page*/
?>

<?php get_header();?>

                        <!-- Header adslot-->
                        <?php get_template_part('includes/section','top_header_slot_ad');?>
                        <!-- End Featured Post-->

                        <!-- Reviews Post Block-->
                        <?php get_template_part('includes/section','non_featured_reviews');?><hr class="container">
                        <!-- End of Reviews Post Block--> 

                        <!-- Header middle adslot-->
                        <?php get_template_part('includes/section','middle_header_ad');?>
                        <!-- End Header middle adslot-->
                                    
                        <!-- Projects Post Block-->
                        <?php get_template_part('includes/section','non_featured_projects');?><hr class="container">
                        <!-- End of Projects Post Block-->

                        <!-- Header bottom adslot-->
                        <?php get_template_part('includes/section','bottom_header_slot_ad');?>
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