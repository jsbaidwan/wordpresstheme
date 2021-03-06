

<?php 

//adding the CSS and JS file using wordpress hook: wp_enequeue
function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css'); 
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// Adding Theme Support

function gt_init(){
    add_theme_support('post-thumbnails');   // Add featured image function in posts
    add_theme_support('title-tag'); // Add custom tagline on different pages
    add_theme_support('html5',
        array('common-list', 'common-form', 'search-form')
    );
}

add_action('after_setup_theme', 'gt_init');

// Projects Post Type

function gt_custom_post_type() {
    register_post_type('project',
      array(
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments'  
        )
      )
    );
}

add_action ('init', 'gt_custom_post_type');