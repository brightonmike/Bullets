<?php
/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function gunnertheme_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="#" target="_blank">Your Site Name</a></span>.', 'gunnertheme');
}

// adding it to the admin area
add_filter('admin_footer_text', 'gunnertheme_custom_admin_footer');