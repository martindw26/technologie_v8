<?php
	$allowed_html = array(
    'script' => array(
        'type'        => array(),
        'id'          => array(),
        'name'        => array(),
        'value'       => array()
     ),
	 'div' => array(
        'id'        => array(),
        'class'     => array(),
     ),
);
?>


<!-- Homepage top ad head script -->
<?php if( get_field( 'header_ad_top_slot_head','option' ) ): ?>
<?php (the_field( 'header_ad_top_slot_head','option' ), $allowed_html ); ?>
<?php endif; ?>
<!-- END Homepage top ad head script -->

<!-- Homepage middle ad head script -->
<?php if( get_field( 'header_ad_middle_slot_head','option' ) ): ?>
<?php the_field( 'header_ad_middle_slot_head','option' ); ?>
<?php endif; ?>
<!-- END Homepage middle ad head script -->

<!-- Homepage bottom ad head script -->
<?php if( get_field( 'header_ad_bottom_slot_head','option' ) ): ?>
<?php the_field( 'header_ad_bottom_slot_head','option' ); ?>
<?php endif; ?>
<!-- END Homepage bottom ad head script -->

<!-- MPU top ad head script -->
<?php if( get_field( 'mpu_top_slot_head_script','option' ) ): ?>
<?php the_field( 'mpu_top_slot_head_script','option' ); ?>
<?php endif; ?>
<!-- END MPU top ad head script -->

<!-- MPU bottom ad head script -->
<?php if( get_field( 'mpu_bottom_slot_head_script','option' ) ): ?>
<?php the_field( 'mpu_bottom_slot_head_script','option' ); ?>
<?php endif; ?>
<!-- END MPU bottom ad head script-->


              
