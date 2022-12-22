<div>

<h2>You may also <i>like</i></h2>

<?php

$post_id = get_field('post_id');

//relared post loop begins here

$args = array(
					'post_type' 				=> 'post',
					'post_status' 			=> 'publish',
					'post__in'				=> $post_id

					);

				$relatedPosts = new WP_Query($args);

if ($relatedPosts-> have_posts()) :

    while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
?>

   <div class="container p-2 bg-dark text-white">
  			<div class="row">
	    		<div class="col-lg-9"><h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
	    		<div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
	    		<div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-white">&ldquo;<?php echo excerpt(100);?>&rdquo;</p><br><a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
  			</div>
		</div><br>


    <?php
   endwhile; wp_reset_query();

    else :

    endif;

?>




</div>


              
