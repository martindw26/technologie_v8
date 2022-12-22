<section class="d-flex justify-content-center align-items-center h-100 min-vh-25">
	<div class="container">
	<h2 class="mb-4 post_block_title">Latest <i>deals</i></h2>
		<div class="row gy-2">
		    <?php if (have_posts()) : while (have_posts()) : the_post();
			 the_content();
			 endwhile;
		                     else :
		                     echo '<p>No content found</p>';
			 endif; ?>
		<?php // Block1 posts projects loop begins here
                                          $condition = array(
                                                "post_type"                   => "post",
                                                "post_status"                => "publish",
                                                "orderby"                       => "rand",
                                                "posts_per_page"        => 4,
                                                'category__in' => array( 6 ),
		        'category__not_in' => array( 2 )
                                                );                                           
                                                $block1 = new WP_Query ($condition);
                                                if ($block1->have_posts()) :
                                                while ($block1->have_posts()) : $block1->the_post();?>
		        <div class="col-lg">
		       <!-- Blog post-->
		       <div class="box h-100 d-100 d-flex flex-column text-dark">
                                               <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                               <img class="img-fluid"  src="<?php echo $url ?>"/>
			<h5 class="mt-3 p-2"><?php the_title();?></h5>
			<?php $price = get_field('price');?> 
			<h5 class="text-success p-2">Price £<?php echo $price;?></h5>
			<div class="">
			<?php get_template_part('includes/section','reviewrating');?><br><br>
			<!-- End catarrayrated -->
			</div>
			<h5 class="mb-1 p-2"><i><?php echo get_the_date();?></i></h5>
			<a href="<?php the_permalink() ?>" class="p-2 btn mt-auto btn-success rounded-0">Get deal</a>
                			</div><!-- End box bg-primary h-100 d-100 d-flex p-4 flex-column text-white-->			                    
			</div>

<?php endwhile;  else :  endif; wp_reset_postdata();?>

</div><!-- End col-lg-3 col-md-4-->    
</div><!-- End Div row gy-2--> 
</div><!-- End Div container-->
</section><!-- End Div section-->

<br>  

