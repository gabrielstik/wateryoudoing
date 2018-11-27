<?

add_action('init', 'add_taxonomy_types');
function add_taxonomy_types() {
  $args = array(
    'label' => 'Types'
  );
  register_taxonomy('types', 'items', $args);
}