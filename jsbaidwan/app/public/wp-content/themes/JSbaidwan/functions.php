

<?php 

//adding the CSS and JS file using wordpress hook: wp_enequeue
function gt_setup(){
    wp_enequeue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enequeue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css'); 
    wp_enequeue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enequeue_script("main", get_theme_file_uri('js/main.js'), NULL, microtime(), true);
}

add_action('wp_enequeue_scripts', 'gt_setup');