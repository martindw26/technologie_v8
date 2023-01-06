<div class="container">


<div class="topnav-desktop">
	<?php
	wp_nav_menu(
		array(
		'theme_location' => 'primary',
		'menu_class' => 'topnav-desktop' 
		)
		);
	?>
</div>

<div class="topnav-mobile">
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
