<?php
/*
Plugin Name: simple Google +1
Plugin URI: http://www.lightapps.co.il
Description: Use this plugin in order to add a Google +1 button to each and every post. 
Author: Edo Frenkel
Version: 1.0
Author URI: http://www.lightapps.co.il
*/ 

define ('GOOGLE_ADD_TEMPLATE',"<br /><div style=\"text-align:left\"><g:plusone size=\"tall\" annotation=\"inline\"></g:plusone><br />");
define ('GOOGLE_ADD_JS',"<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>");

function google_get_button($content) 
{
	return $content . GOOGLE_ADD_TEMPLATE;
}
function google_add_js() 
{
	print GOOGLE_ADD_JS;
}
add_action('wp_head','google_add_js');
add_filter('the_content', 'google_get_button');

?>
