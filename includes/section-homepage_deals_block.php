<section class="d-flex justify-content-center align-items-center h-100 min-vh-25">
	<div class="container">
	<h2 class="mb-4 post_block_title text-dark">Latest <i>deals</i></h2>
		<div class="row gy-2">
		    <?php if (have_posts()) : while (have_posts()) : the_post();
			 the_content();
			 endwhile;
		                     else :
		                     echo '<p>No content found</p>';
			 endif; ?>
		<?php // Block1 posts projects loop begins here
                                          $condition = array(
                                                "post_type"                   	=> "post",
                                                "post_status"                	=> "publish",
                                                "posts_per_page"        	=> 4,
                                                'cat' 		=> 6,
		        'category__not_in' => array( 2 )
                                                );                                           
                                                $block1 = new WP_Query ($condition);
                                                if ($block1->have_posts()) :
                                                while ($block1->have_posts()) : $block1->the_post();?>
		        <div class="col-lg">
		       <!-- Blog post-->
		       <div class="box h-100 d-100 d-flex flex-column text-white shadow-sm p-3 mb-5 bg-body rounded">
 
	<div class="card bg-white rounded rounded-0 text-dark border border-0">
	<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
	  <img src="<?php echo $url ?>" class="card-img-top featured" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?php the_title();?></h5><br>
		
	    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">See deals</a>

	  </div>
	  </div>
                   </div>
                </div>

<?php endwhile;  else :  endif; wp_reset_postdata();?>

</div><!-- End col-lg-3 col-md-4-->    
</div><!-- End Div row gy-2--> 
</div><!-- End Div container-->
</section><!-- End Div section-->

<br>  
<div class="containter-fluid d-flex justify-content-center">
<a href="https://techhobbyist.co.uk/deals/" class="btn btn-dark text-white">Read Deals</a>
</div>
<br>  


