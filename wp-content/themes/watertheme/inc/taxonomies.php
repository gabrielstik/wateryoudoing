<?

add_action('init', 'add_taxonomy_types');
function add_taxonomy_types() {
  $args = array(
    'label' => 'Types'
  );
  register_taxonomy('types', 'items', $args);
}

add_action('init', 'add_taxonomy_consumption');
function add_taxonomy_consumption() {
  $args = array(
    'label' => 'Consommation'
  );
  register_taxonomy('consumption', 'items', $args);
}