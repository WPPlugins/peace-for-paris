<?php
/*
Plugin Name: Peace for Paris
Plugin URI: 
Description: Add the Paris Peace Sign to show your support.
Version: 1.0
Author: RavanH
Author URI: http://status301.net/
*/

function pps_print_button(){
	echo '
<img id="parispeacesign" src="'.plugins_url('/paris-peace-sign.png', __FILE__).'" alt="Peace for Paris - &copy; Jean Jullien" />
';
}
add_action('wp_footer', 'pps_print_button');

function pps_print_css(){
	echo '
<style type="text/css">
#parispeacesign{width:134px;height:134px;position:absolute;top:10px;right:10px;z-index:100000;border-radius:67px;background-color:rgba(200,200,200,.5);}
@media screen and (min-width: 600px){#parispeacesign{position:fixed}}
</style>
';
}
add_action('wp_head', 'pps_print_css');
