<?

add_action('init', 'add_post_type_questions');
function add_post_type_questions() {
    $args = array(
      'public' => true,
      'label'  => 'Questions',
      'menu_icon' => 'dashicons-menu'
    );
    register_post_type('questions', $args);
}

add_action('init', 'add_post_type_items');
function add_post_type_items() {
    $args = array(
      'public' => true,
      'label'  => 'Objets',
      'menu_icon' => 'dashicons-art'
    );
    register_post_type('items', $args);
}