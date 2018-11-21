<?

acf_add_options_page( $args );

$args = array(
	'page_title' => 'Options',
	'menu_title' => 'Options',
	'menu_slug' => 'options',
	'capability' => 'edit_posts',
	'position' => false,
	'parent_slug' => '',
	'icon_url' => false,
	'redirect' => true,
	'post_id' => 'options',
	'autoload' => false,
	'update_button'		=> __('Update', 'acf'),
	'updated_message'	=> __("Options Updated", 'acf')
);