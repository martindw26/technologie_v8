<?php
/*Template name: Training*/
?>

<?php get_header();?>

<div class="container">
        <div class="row">
            <div class="col-lg-8 p-lg-2">
                <div class="col-md">
                <h2 class="p-2 text-dark">Training</h2>
                    <div class="container mt-3 border-border border-0 p-3 rounded">
                            <!-- Post Block 1-->
                            <?php get_template_part('template-parts/block_2');?>
                            <!-- End of Post Block--> 
                        <br>
                    </div>
                </div>
            </div>	
        </div>
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
</div> 

<?php get_footer();?>