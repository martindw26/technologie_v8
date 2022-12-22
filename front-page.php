<?php
/*Template name: Front-Page*/
?>

<?php get_header();?>


                        <!-- Featured Post-->
	       <?php get_template_part('includes/section','hp_featured_slider');?><hr class="container">

                        <!-- End Featured Post-->
                        
                        <!-- Reviews Post Block-->
                        <?php get_template_part('includes/section','non_featured_reviews');?><hr class="container">
                        <!-- End of Reviews Post Block--> 
                                    
                        <!-- Projects Post Block-->
                        <?php get_template_part('includes/section','non_featured_projects');?><hr class="container">
                        <!-- End of Projects Post Block-->

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