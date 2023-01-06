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
</div>
</div>


</div>
