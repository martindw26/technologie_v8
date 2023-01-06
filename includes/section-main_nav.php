<div class="container">


<div class="topnav-desktop">
	<?php
	wp_nav_menu(
		array(
		'theme_location' => 'primary',
		'menu_class' => 'topnav' 
		)
		);
	?>
</div>

<div class="topnav-mobile">
<div class="topnav">
  <div id="myLinks">
	<?php
	wp_nav_menu(
		array(
		'theme_location' => 'mobile',
		'menu_class' => 'topnav-mobile' 
		)
		);
	?>
</div>
 <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>


</div>
