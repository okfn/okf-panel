jQuery(document).ready(function($) {

	// Frontend JS
	
	// Check for BS collapse, then add if required	
	if(typeof($.fn.collapse) === 'undefined') {
		$.getScript('http://assets.okfn.org/themes/okfn/collapse.min.js');
	}
	
	// Add OKF Panel JS
	$.getScript('http://assets.okfn.org/themes/okfn/okf-panel.js');
	
	// Add class to body, to allow conditional styling
	$("body").addClass("okf-panel");
});
