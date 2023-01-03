<?php
/*Template name: Training*/
?>

<?php get_header();?>

<div class="container">

<div class="row">

  <div class="col-lg-8 p-lg-2">

  <?php if (have_posts()) : ?>

    <h2 class="p-2 text-dark"><?php
if ( is_category() ) {
    single_cat_title('Latest ');
} elseif ( is_tag() ) {
    single_cat_title('Latest tags: ');
} elseif ( is_author() ) {
    the_post();
    echo 'Author Archives: ' . get_the_author();
    rewind_posts();
} elseif ( is_day() ) {
    echo 'Daily Archives: ' . get_the_date();
} elseif ( is_month() ) {
    echo 'Monthly Archives: ' . get_the_date('F Y');
} elseif ( is_year() ) {
    echo 'Yearly Archives: ' . get_the_date('Y');
} else {
    echo 'Archives:';
}

?></h2>

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


<?php get_footer();?>