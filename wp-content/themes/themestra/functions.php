<?php
function asset(){
  wp_enqueue_style('main-css',get_stylesheet_uri(), rand(111,9999));


}
add_action('wp_enqueue_scripts','asset');


?>
