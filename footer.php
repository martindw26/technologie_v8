


<?php 
/* footer */
?>



<footer>



<div class="container-fluid mt-3 text-decoration-none">
  <div class="row">
    <div class="col-lg col-sm-4 p-3 text-decoration-none">
    	<?php
					wp_nav_menu(
						array(
						'theme_location' => 'footer_one',
						'menu_class' => 'primary-menu-footer'
						)	
					);
					?>

    </div>
    <div class="col-lg col-sm-4 p-3 text-decoration-none">
    	<?php
					wp_nav_menu(
						array(
						'theme_location' => 'footer_two',
						'menu_class' => 'primary-menu-footer'
						)	
					);
					?>
    </div>
    <div class="col-lg col-sm-6 p-3 text-lg-end text-sm-center">
    	<p class="text-white"> Copyright 2022 techhobbyist.co.uk All Rights Reserved.</p>
<button class="cmplz-manage-consent">Manage consent settings</button>
    </div>
  </div>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>