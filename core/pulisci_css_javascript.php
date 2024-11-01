<?php

function velocewp_pulisci_css_javascript( $src ) {
	if ( strpos( $src, 'ver=' ) ) {	   $src = remove_query_arg( 'ver', $src );	}
	return $src;
} 
add_filter( 'style_loader_src', 'velocewp_pulisci_css_javascript', 9999 );
add_filter( 'script_loader_src', 'velocewp_pulisci_css_javascript', 9999 );

?>