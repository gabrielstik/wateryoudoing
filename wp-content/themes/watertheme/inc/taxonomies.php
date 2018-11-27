<?

add_action('init', 'add_taxonomy_hygiene');
function add_taxonomy_hygiene() {
  $args = array(
    'label'        => 'Hygiène',
  );
  register_taxonomy('hygiene', 'items', $args);
}

add_action('init', 'add_taxonomy_transport');
function add_taxonomy_transport() {
  $args = array(
    'label'        => 'Transport',
  );
  register_taxonomy('transport', 'items', $args);
}

add_action('init', 'add_taxonomy_technology');
function add_taxonomy_technology() {
  $args = array(
    'label'        => 'Technology',
  );
  register_taxonomy('technology', 'items', $args);
}

add_action('init', 'add_taxonomy_drinkeat');
function add_taxonomy_drinkeat() {
  $args = array(
    'label'        => 'Drink/Eat',
  );
  register_taxonomy('drinkeat', 'items', $args);
}

add_action('init', 'add_taxonomy_activities');
function add_taxonomy_activities() {
  $args = array(
    'label'        => 'Activités',
  );
  register_taxonomy('activities', 'items', $args);
}