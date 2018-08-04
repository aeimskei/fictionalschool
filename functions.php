<!-- Tell WP to load our css/script/load title file -->
<?php

// ========================================================================
function school_files() {
  // load script file js for slideshow
  wp_enqueue_script('main-school-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

  // styling custom fonts w/ Google
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet"');

  // styling font-awesome
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  // styling custom CSS file, get_stylesheet_uri() func is referring to style.css
  wp_enqueue_style('school_main_styles', get_stylesheet_uri(), NULL, microtime());
}
// this action loads css and javascript files
add_action('wp_enqueue_scripts', 'school_files');

// ========================================================================
function school_features() {
  add_theme_support();
}
// this action loads title on the browser tab dynamically
add_action('after_setup_theme', 'university_features');