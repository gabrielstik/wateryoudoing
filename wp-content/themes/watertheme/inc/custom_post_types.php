<?

add_action('init', 'add_post_type_questions');
function add_post_type_questions() {
    $args = array(
      'public' => true,
      'label'  => 'Questions',
      'menu_icon' => 'dashicons-menu',
      'supports' => array('title', 'thumbnail'),
      'taxonomies' => array('hygiene')
    );
    register_post_type('questions', $args);
}

add_action('init', 'add_post_type_items');
function add_post_type_items() {
    $args = array(
      'public' => true,
      'label'  => 'Objets',
      'menu_icon' => 'dashicons-art',
      'supports' => array('title', 'thumbnail')
    );
    register_post_type('items', $args);
}