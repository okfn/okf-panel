<?php

  // Main html
	$okfpanel_iframe = '<div id="okf-panel" class="collapse"><iframe src="http://assets.okfn.org/themes/okfn/okf-panel.html" scrolling="no"></iframe></div>';
  $okfpanel_ribbon = '<div class="okfn-ribbon"><a href="http://okfn.org/" data-toggle="collapse" data-target="#okf-panel" title="Part of the Open Knowledge Foundation Network">An Open Knowledge Foundation Site</a></div>';

  // Relative panel
	function show_okfpanel() {
		echo $GLOBALS['okfpanel_iframe'];
	}
	function show_okfribbon() {
		echo $GLOBALS['okfpanel_ribbon'];
	}

	// Absolute panel
	function show_okfpanel_absolute() {
		echo '<div class="absolute-okf-panel">'.$GLOBALS['okfpanel_iframe'].'<div class="container">'.$GLOBALS['okfpanel_ribbon'].'</div></div>';
	}
	
	// Fixed panel
	function show_okfpanel_fixed() {
		echo '<div class="fixed-okf-panel">'.$GLOBALS['okfpanel_iframe'].'<div class="container">'.$GLOBALS['okfpanel_ribbon'].'</div></div>';
	}
	
		
	// Get and print option values
	$okfpanel_position = $okfpanel->get_option( 'position' );
	
	
	// Show panel
	if ($okfpanel_position == 'relative') {
	  add_action ( 'okf_panel', 'show_okfpanel' );
		add_action ( 'okf_ribbon', 'show_okfribbon' );
	}
	else if ($okfpanel_position == 'fixed') {
		add_action ( 'wp_footer', 'show_okfpanel_fixed' );
	}
	else {
	  add_action ( 'wp_footer', 'show_okfpanel_absolute' );
	}
	
?>
