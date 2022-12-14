<div class="container pt-2">
	<h2 class=" post_block_title text-dark">Featured <i>articles</i></h2>
<div class="row row-cols-1 row-cols-md-3">
<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Right small block posts projects loop begins here
                                          $condition = array(
                                                "post_type"           => "post",
                                                "post_status"         => "publish",
                                                "orderby"             => "rand",
                                                "posts_per_page"      => 2,
		       'tag_id' => 62,
                                          );                                           
                                          $block1 = new WP_Query ($condition);
                                          if ($block1->have_posts()) :
                                          while ($block1->have_posts()) : $block1->the_post();?>

  <div class="col-md-6"> <!-- main fetured block-->
 <div class="card rounded rounded-1 border border-0 shadow-sm p-3 mb-5 bg-body rounded h-100">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-1 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
				<h2 class="mb-4" style="height:25px";>	
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
				}elseif ($catarrayrated == 3){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
				</h2>
<p class="mb-3">&#34;<?php echo excerpt(25);?>&#34;
				</p>

		<div class="card-text text-muted small">
		Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
		</div><br>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div>
<?php endwhile;  else :  endif; wp_reset_postdata();?>


</div>
</div>





<br>  
