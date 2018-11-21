<?

define('THEME_ROOT', get_template_directory_uri());
define('THEME_PATH', get_template_directory());
define('THEME_STYLES', get_template_directory_uri().'/'.'css/');
define('THEME_SCRIPTS', get_template_directory_uri().'/'.'js/');

foreach (glob(THEME_PATH . '/inc/*.php') as $file) {
  include_once $file;
}