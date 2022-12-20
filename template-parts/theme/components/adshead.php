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


<!-- MPU Top ad head script -->
<?php if( get_field( 'mpu_top_slot_head_script','option' ) ): ?>
<?php echo wp_kses(get_field( 'mpu_top_slot_head_script, 'options' ), $allowed_html) ; ?>
<?php endif; ?>
<!-- END MPU Top ad head script -->

<!-- MPU Bottom ad head script -->
<?php if( get_field( 'mpu_bottom_slot_head_script','option' ) ): ?>
<?php echo wp_kses(get_field( 'mpu_bottom_slot_head_script, 'options' ), $allowed_html) ; ?>
<?php endif; ?>
<!-- END MPU Bottom ad head script -->

<!-- Homepage top ad head script -->
<?php if( get_field( 'header_ad_top_slot_head','option' ) ): ?>
<?php echo wp_kses(get_field( 'header_ad_top_slot_head, 'options' ), $allowed_html) ; ?>
<?php endif; ?>
<!-- END Homepage top ad head script -->

<!-- Homepage middle ad head script -->
<?php if( get_field( 'header_ad_middle_slot_head','option' ) ): ?>
<?php echo wp_kses(get_field( 'header_ad_middle_slot_head, 'options' ), $allowed_html) ; ?>
<?php endif; ?>
<!-- END Homepage middle ad head script -->

<!-- Homepage bottom ad head script -->
<?php if( get_field( 'header_ad_bottom_slot_head','option' ) ): ?>
<?php echo wp_kses(get_field( 'header_ad_bottom_slot_head, 'options' ), $allowed_html) ; ?>
<?php endif; ?>
<!-- END Homepage bottom ad head script -->


              
