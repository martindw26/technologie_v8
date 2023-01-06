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
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
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
