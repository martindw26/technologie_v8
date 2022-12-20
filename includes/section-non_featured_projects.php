<div class="container">
	<?php $Block1Title = get_field ( 'Block_2_title' );?>
	<h2 class=" post_block_title text-dark">Latest <i><?php echo $Block1Title;?></i></h2>
</div>
<div class="container pt-lg-4 pb-lg-4">
	<div class="row">
	<div class="col-lg-6">



<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Right small block posts projects loop begins here
		$category2 = get_field ( 'block_2_category' );
											$condition3 = array(
                                                "post_type"           => "post",
                                                "post_status"         => "publish",
                                                "orderby"             => "date",
                                                "posts_per_page"      => 1,
												'tag__not_in' => array( 62),
												'tax_query' => array(
													array(
													  'taxonomy' => 'category',
													  'field'    => 'term_id', 
													  'terms'    => $category2,
													),
												),
												);                                           
                                          $block4 = new WP_Query ($condition3);
                                          if ($block4->have_posts()) :
                                          while ($block4->have_posts()) : $block4->the_post();?>


<div class="card rounded rounded-0 border border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-height:600px;"><!-- non-fetured block-->
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-1 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
				<h5 class="mb-4" style="height:25px";>	
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
				</h5>

		<div class="card-text text-muted small">
							Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
						</div><br>
						<p class="mb-3">&#34;<?php echo excerpt(25);?>&#34;</p>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div>

<?php endwhile;  else :  endif; wp_reset_postdata();?>

<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
        $category2 = get_field ( 'block_2_category' );
		$block2Offset = get_field ( 'block_2_right_offset' );
		$condition4 = array(
										"post_type"           => "post",
										"post_status"         => "publish",
										"orderby"             => "date",
										"offset"             => $block2Offset,
										"posts_per_page"      => 3,
										'tax_query' => array(
											array(
											'taxonomy' => 'category',
											'field'    => 'term_id', 
											'terms'    => $category2,
											),
										),
										);                                           
								$block3 = new WP_Query ($condition4);
								if ($block5->have_posts()) :
								while ($block5->have_posts()) : $block5->the_post();?>
<div class="non_featured_block_home_page">


<div class="container shadow-sm p-3 mb-2 bg-body rounded" style="height:195px;"><!-- small non-fetured block-->

<div class="row">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  <div class="col"><img class="img-fluid featured rounded rounded-1" src="<?php echo $url ?>" style="height:150px";>
</div>
    <div class="col-6">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
	<p class="card-text text-muted">Article by: <?php echo get_the_author();?></i>,   Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | Read time: <?php echo $read_time ?><?php endif ?></p>
	<a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Read More</a></div>

  </div>
</div>
</div>
		<?php endwhile;  else :  endif; wp_reset_postdata();wp_reset_query();?>
				</div>



<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
         $category2 = get_field ( 'block_2_category' );
		 $block2Offset = get_field ( 'block_2_right_offset' );
		 $condition4 = array(
										 "post_type"           => "post",
										 "post_status"         => "publish",
										 "orderby"             => "date",
										 "offset"             => $block2Offset,
										 "posts_per_page"      => 3,
										 'tax_query' => array(
											 array(
											 'taxonomy' => 'category',
											 'field'    => 'term_id', 
											 'terms'    => $category2,
											 ),
										 ),
										 );                                      
                                          $block3 = new WP_Query ($condition4);
                                          if ($block3->have_posts()) :
                                          while ($block3->have_posts()) : $block3->the_post();?>
<div class="non_featured_block_home_page_mobile">
<div class="card rounded rounded-0 border border-0">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5><h2 class="" style="height:25px";>	
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
			</div>
		</div>
	</div>
</div><hr class="d-sm-block d-md-none">
<div class="d-flex justify-content-center">
<?php $Block1MoreURL = get_field( 'block_2_more_url' );?>
<a href="<?php echo $Block1MoreURL;?>" class="btn btn-white text-black border border-2 border-dark pb-sm-2 fs-5 text">More reviews</a>
</div>