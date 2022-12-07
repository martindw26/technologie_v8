<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
   <head>


      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
      <!-- GA scripts --><?php the_field('google_analytic', 'option'); ?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 
<meta name="google-site-verification" content="JbtpfGonAlshcSxHW_vqTXmpIU-rrA9O2Yq-6Du3aNA" />
      <!-- Affiliate scripts --><?php the_field('affiliate_scripts', 'option'); ?>
      <?php wp_head();?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

      
</head>




<?php $enable_header_on = get_field('header_on','option');?>
<?php if($enable_header_on):?>
<!-- Social share icons-->
<?php get_template_part('includes/section','social_share');?>
<!-- End Social share icons-->
<?php else:?>
<?php echo '<style>{ display:none;}</style>';?>
<?php endif;?>


<!-- Page header logo-->
        
		<div class="container-fluid bg-black">
      <?php get_template_part('includes/section','logo');?>
      <?php get_template_part('includes/section','main_nav');?>
</div>

        





