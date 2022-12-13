
<div class id="container">
	<?php $category = get_field('category');?>

	<?php if($category):?>
     <h4>You may also like <i>these projects</i></h4>
     <?php endif;?>

		<?php		
					$args = array(
					'post_type' 		=> 'post',
					'post_status' 		=> 'publish',
					'offset' 	  		=>	1,
					'cat'  				=>  3,
					'posts_per_page' 	=>  4
					);

				$query = new WP_Query($args);
				while ($query->have_posts()) : $query->the_post();
		?>


		<?php if($category):?>

		<div class="container p-2 bg-dark rounded">
  			<div class="row">
	    		<div class="col-lg-9"><h5><a class="text-decoration-none link-light text-light" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
	    		<div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
	    		<div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-light">&ldquo;<?php echo excerpt(15);?>&rdquo;</p><br><a class="text-light text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
  			</div>
		</div><br>	

		<?php endif;?>

<?php endwhile; wp_reset_query();?>

</div><!-- .content-area -->






