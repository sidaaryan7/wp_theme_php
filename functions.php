<?php
function rajeev_theme_support(){
   /* add dynamic title support*/
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','rajeev_theme_support');

/* menu bar */
function rajeev_menu(){
    $location = array (
        'primary'=>"Desktop Primary Left Sidebar",
        'footer'=>"Footer Menu Items"
    );

    register_nav_menus($location);

}

add_action('init','rajeev_menu');



function rajeev_register_styles(){
    $version=wp_get_theme()->get('Version');

    wp_enqueue_style('rajeev-style',get_template_directory_uri()."/style.css",array('rajeev-bootstrap'),$version,'all');
    wp_enqueue_style('rajeev-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
    wp_enqueue_style('rajeev-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all'); 
}

add_action('wp_enqueue_scripts','rajeev_register_styles');



function rajeev_register_scripts(){
    

     wp_enqueue_script('rajeev_jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
     wp_enqueue_script('rajeev_popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0',true);
     wp_enqueue_script('rajeev_bootstrap_js',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true);
     wp_enqueue_script('rajeev_main',get_template_directory_uri()."/assests/js/main.js",array(),'3.4.1',true);
     
}

add_action('wp_enqueue_scripts','rajeev_register_scripts')


?>