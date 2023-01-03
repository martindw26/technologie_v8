<?php
  get_header();
/*Template name: Training*/
?>  

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


             <?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
        $training_category1 = get_field ( 'training_block_1_category' );
        $training_block_1_left_post_exclude = get_field ( 'training_block_1_left_post_exclude' );
		$tblock1Offset = get_field ( 'tblock1Offset' );
		$tcondition2 = array(
                                    'orderby' => 'meta_value_num',
                                    'order' => 'ASC',
                                    'post_type' => 'post',
                                    "post_status"    => "publish",
                                    'posts_per_page' => 3,
                                    'post__not_in' => $training_block_1_left_post_exclude,
                                    'tax_query' => array(
                                        array(
                                        'taxonomy' => 'category',
                                        'field'    => 'term_id', 
                                        'terms'    => $training_category1
                                        )
                                    )
										);                                           
								$tblock2 = new WP_Query ($tcondition2);
								if ($tblock2->have_posts()) :
								while ($tblock2->have_posts()) : $tblock2->the_post();?>
        <div class="col-md">

<div class="container mt-3 border-border border-0 shadow-sm p-3 mb-5 bg-body rounded">

<div class="row"><!-- block left-->
    <div class="col-md-6 col-sm bg-white text-dark">
    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
      <img class="img-fluid p-1 rounded-1" src="<?php echo $url ?>"/>
    </div><!-- End block right-->
    <div class="col-md-6 col-sm bg-white text-dark p-2"><!-- block right-->
 <h5 class="card-title"><?php echo get_the_title();?></h5>


<p class="p-1 text-dark">&ldquo;<?php echo excerpt(15);?>&rdquo;</p>
        <p class="card-text"><small class="text-dark"><?php echo get_the_date();?></small></p>
<a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Read More</a>

    </div><!-- End block right-->
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