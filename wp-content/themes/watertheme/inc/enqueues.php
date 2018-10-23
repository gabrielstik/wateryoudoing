<?

add_action('wp_enqueue_scripts', 'add_styles_scripts');
function add_styles_scripts() {
  wp_register_style('main_style', THEME_STYLES.'main.css' );
  wp_register_script('main_script', THEME_SCRIPTS.'app.js');

  wp_enqueue_style('main_style');
  wp_enqueue_script('main_script');
}