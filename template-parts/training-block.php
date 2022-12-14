<div class="col-lg p-lg-2">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
            endwhile;
            else :
            echo '<p>No content found</p>';
            endif; ?>
            <?php // Left block posts projects loop begins here
            $training_category1 = get_field ( 'training_block_1_category' );
            $training_block_1_post_exclude = get_field ( 'training_block_1_post_exclude' );
            $tcondition1 = array(
                                            'orderby'           => 'meta_value_num',
                                            'order'             => 'ASC',
                                            'post_type'         => 'post',
                                            "post_status"       => "publish",
                                            'posts_per_page'    => 3,
                                            'post__not_in'      => $training_block_1_post_exclude,
                                            'tax_query'         => array(
                                                array(
                                                'taxonomy' => 'category',
                                                'field'    => 'term_id', 
                                                'terms'    => $training_category1
                                                )
                                            )
                            );                                           
                        $tblock1 = new WP_Query ($tcondition1);
                        if ($tblock1->have_posts()) :
                        while ($tblock1->have_posts()) : $tblock1->the_post();?>

  <div class="col-md">

<div class="container border-border border-0 p-3 rounded">
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
</div>
</div>

<?php endwhile;  else :  endif; wp_reset_postdata();wp_reset_query();?>
</div>


