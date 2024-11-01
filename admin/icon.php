<?php
 
function coupon_add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-coupon div.wp-menu-image:before {
content: '\f231';
}
</style>
 
<?php
}
add_action( 'admin_head', 'coupon_add_menu_icons_styles' );
?>