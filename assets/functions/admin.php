<?php

function bullets_custom_admin_footer() {
	_e('<div id="footer-thankyou">Developed by <a href="#" target="_blank">Your Site Name</a></div>.', 'bullets');
}

add_filter('admin_footer_text', 'bullets_custom_admin_footer');