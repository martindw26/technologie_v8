<div class="">
<h3 class="post_block_title text-dark d-flex justify-content-center">You may also like these deals</h3><hr>
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
"orderby"               	=> 'date',
'offset' 		=> 1,
'cat' 		=> 6,
'category__not_in' => array( 2,3,25 )

);$block1 = new WP_Query ($condition);
if ($block1->have_posts()) :
while ($block1->have_posts()) : $block1->the_post();?>
<!-- Blog post-->
				<div class="box h-100 d-100 d-flex flex-column text-light bg-dark ">
				<h3 class="p-2"><?php echo get_the_title();?></h3>
				<div class="p-2 text-muted">By <i><?php echo get_the_author();?></i>  | 
				<?php echo get_the_date();?></div>	
				<!-- Social share icons-->
				<?php $enable_on = get_field('on','option');?>
				<?php if($enable_on):?>
					<?php get_template_part('includes/section','social_sharefrontpage');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->         
                           	<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                    			<img class="img-fluid"  src="<?php echo $url ?>" />
				
				
				<div class="pt-4 pe-2 ps-2 pb-1">
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
					foreach ($catarrayrated as $catarrayrated) {
						$catarrayrated = $catarrayrated->term_id;
							if ($catarrayrated == 2) {
								get_template_part('includes/section','reviewratingshort');
							}elseif ($catarrayrated == 3){
								get_template_part('includes/section','difficultyratingshort');
							}elseif ($catarrayrated == 6){
								get_template_part('includes/section','reviewratingshort');
						}
						}
				?>
				<!-- End catarrayrated -->
				</div>
				<p class="p-2">&ldquo;<?php echo excerpt(100);?>&rdquo;</p>
				<a class="bg-success text-end text-decoration-none text-white p-3" href="<?php the_permalink() ?>" class=" btn mt-auto btn text-end text-dark bg-white p-2 rounded-0 border border-1 "><h4>Read More</h4></a>
                	</div><!-- End box bg-primary h-100 d-100 d-flex p-4 flex-column text-white-->				                    
				</div><br>

<?php endwhile;  else :  endif; wp_reset_postdata();?>
</div>
</div>
<br>    
