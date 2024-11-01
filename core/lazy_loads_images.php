<?php

function velocewp_lazy_loads_images_script() {    
   wp_enqueue_script('lazy_loads_images', plugins_url( '/core/lazy_loads_images.js' , __FILE__ ), array('jquery'),null,true);
}
 add_action( 'wp_enqueue_scripts', 'velocewp_lazy_loads_images_script' );  

?>