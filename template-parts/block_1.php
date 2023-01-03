<div class="container">
<?php $trainingblock1title = get_field ( 'trainingblock1title' );?>
<h2 class=" post_block_title text-dark"><i><?php echo $trainingblock1title;?></i></h2>
</div>
<div class="container">
<div class="row">

<div class="col-lg-8 p-lg-2">

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

<div class="col-lg-8 p-lg-2">

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

<div class="sidebar col-lg-4 col-md-4 p-2">

  </div>

  <!-- Category sidebar search-->
<?php get_template_part('includes/section','search');?>
<!-- End Category sidebar search-->

<!-- Start of posts sidebar related posts-->
<?php get_template_part( 'template-parts/generic_sidebar' );?>
<!-- End of posts sidebar related posts-->  

<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
         $training_category1 = get_field ( 'training_block_1_category' );
         $block1Offset = get_field ( 'block_2_right_offset' );
         $tcondition2 = array(
                                         "post_type"           => "post",
                                         "post_status"         => "publish",
                                         "orderby"             => "title",
                                         "offset"             => $block1Offset,
                                         "posts_per_page"      => 3,
                                         'tax_query' => array(
                                             array(
                                             'taxonomy' => 'category',
                                             'field'    => 'term_id', 
                                             'terms'    => $training_category1,
                                             ),
                                         ),
                                         );                                           
                                 $tblock2 = new WP_Query ($tcondition2);
                                 if ($tblock2->have_posts()) :
                                 while ($tblock2->have_posts()) : $tblock2->the_post();?>
<div class="non_featured_block_home_page_mobile">
<div class="card rounded rounded-0 border border-0">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5><h2 class="" style="height:25px";>	
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


