<?php
/*
	Plugin Name: UW-Oshkosh Kaltura Enable oEmbed
	Plugin URI:
	Description: Enable UW-Oshkosh Kaltura Mediaspace oEmbed within your site.
	Version: 1.0
	Author: Joseph Kerkhof
	License: CDDL-1.0
*/
add_action( 'init', 'uwosh_kaltura_add_oembed_handlers');
function uwosh_kaltura_add_oembed_handlers(){
    wp_oembed_add_provider( 'https://mymedia.uwosh.edu/id/*', 'https://mymedia.uwosh.edu/oembed/', false );
}