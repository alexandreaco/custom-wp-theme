function run() {
	$height = jQuery(window).height();
	jQuery(".background_img").height($height);
}

jQuery(document).ready( run );
jQuery(window).resize( run );