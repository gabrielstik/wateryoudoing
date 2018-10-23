<?

define('THEME_PATH', get_template_directory());
define('THEME_STYLES', get_template_directory_uri() . '\/assets\/styles\/');
define('THEME_SCRIPTS', get_template_directory_uri() . '\/assets\/scripts\/');

foreach (glob(THEME_PATH . '/inc/*.php') as $file) {
  include_once $file;
}