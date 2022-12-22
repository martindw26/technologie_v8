<div class="">
<h3 class="post_block_title text-dark d-flex justify-content-center">You may also like 
</h3><hr>
<div class="">
<?php if (have_posts()) : while (have_posts()) : the_post();
the_content();
endwhile;
else :
echo '<p>No content found</p>';
endif; ?>
<?php // Block1 posts projects loop begins here
$condition = array(
"post_type"          	=> "post",
"post_status"         	=> "publish",
"posts_per_page"      	=> 2,
"orderby"               	=> 'rand',
'category__not_in'      =>array(19,25,50,1)
);$block1 = new WP_Query ($condition);
if ($block1->have_posts()) :
while ($block1->have_posts()) : $block1->the_post();?>
<!-- Blog post-->
<div class="col">
 <div class="card rounded rounded-0 border border-1">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h6 class="card-title fw-bold"><?php echo get_the_title();?></h6>
				<h6 class="mb-4">	
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
				</h6>
<p class="mb-3">&#34;<?php echo excerpt(25);?>&#34;
				</p>

		<div class="card-text text-muted small">
		Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
		</div><br>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div><br>
<?php endwhile;  else :  endif; wp_reset_postdata();?>


</div>
</div>
