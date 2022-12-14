
<a href="<?php echo $Product_title; ?>"/></a>
<?php if (have_rows('product')): ?>

<?php while (have_rows('product')): the_row(); ?>

<section class="bg-white p-2 mb-4">
<?php $Product_title = get_sub_field('multi_product_title');?>

<h2 class="p-2 card-title font-weight-bold"><u><?php echo $Product_title; ?></u></h2>

<?php $ProductRating = get_sub_field('p_rating');?>
<div class="row">
        <?php foreach ($ProductRating as $rating): ?>
        <h3><?php echo $rating; ?></h3>
        <?php endforeach; ?>		
</div>
<br>
<button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank"></>Get your <?php echo $Product_title; ?> now</a></button>

<br><br>
<?php $Product_image = get_sub_field('image');?>
<img class="img-fluid" src="<?php echo $Product_image; ?>"/><br><br>


<?php $Product_description = get_sub_field('product_description');?>

<blockquote class="blockquote"><?php echo $Product_description; ?></blockquote>

<?php if(have_rows('specs_column_horizontal_block')):?>

<table class="table table-light table-bordered p-2">

<hr><h4 class="card-title font-weight-bold"><?php echo $Product_title; ?> <i>specs</i></h4>

    <tr>
        <th class=""><h4>Component</h4></th>
        <th class=""><h4>Specifications</h4></th>
    </tr>	


<?php while( have_rows('specs_column_horizontal_block')): the_row();?>
	

<tr>
        <th class=""><?php the_sub_field('component');?></th>
        <th class=""><?php the_sub_field('spec');?></th>
</tr>				

<?php endwhile;?>	

</table>			
<?php endif; ?>

<div class="container-fluid p-2 bg-dark text-white text-center">
  <h3>Where to buy an <?php echo $Product_title; ?></h3> 
</div>
  
<div class="container-fluid  bg-dark text white">
  <div class="row">
    <div class="col-sm-4">
<img class="img-fluid p-1" src="<?php echo $Product_image; ?>"/>
    </div>
    <div class="col">
<?php if(have_rows('buy_now')):?>
<table class="table table-borderless table-dark">
<caption>
<p>This site contains affiliate links to products. We may receive a commission for purchases made through these links. Please also report price issues at <a class="text-muted font-weight-ligh" href="mailto:data@techhobbyist.co.uk?subject=Price issue report">Report Price Issues</a></p>
</caption>
<?php while( have_rows('buy_now')): the_row();?>
<?php
$retailer = get_sub_field('dir_retailer');
$Price = get_sub_field('price');
$condition = get_sub_field('condition');
$Single_buy_now_button = get_sub_field('buy_now_button');
$currency = get_sub_field('currency');
//Handles the currecy symbol selection

if($currency == 'GBP') {
  $currency = '&#163';
} else if($currency == 'USD') {
  $currency = '&#36';
} else if($currency == 'Euro') {
  $currency = '&#8364';
} else if($currency == 'JPY') {
  $currency = '&#165';
} else if($currency == 'KWR') {
  $currency = '&#8361';
} else if($currency == 'INR') {
  $currency = '&#8377';
}
?>
  <tbody>

    <tr>
      <th scope="row"></th>
      <td class="border-bottom border-secondary"><?php echo $retailer['label'];?></td>
      <td class="border-bottom border-secondary"><?php echo $currency;?><?php echo $Price;?></td>
      <td class="border-bottom border-secondary"><?php echo $condition;?></td>
      <td class="border-bottom border-secondary"><button type="button" class="btn btn-success float-end "><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank"></>Buy Now</a></button></td>
    </tr>
  </tbody>
<?php endwhile;?>	
</table>
<?php endif; ?>
    </div>

  </div>
</div>
<br>

<!-- Social share icons-->
<?php $enable_in_article = get_field('on_article','option');?>
<?php if($enable_in_article):?>
<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
<?php else:?>
<?php echo '<style>{ display:none;}</style>';?>
<?php endif;?>
<hr>
<!-- End Social share icons-->

</section>
<?php endwhile; ?>
<?php endif; ?>









   
