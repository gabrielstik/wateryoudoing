<?

session_start();
$data = [
  'energy' => $_SESSION['energy'],
  'hunger' => $_SESSION['hunger'],
  'bladder' => $_SESSION['bladder']
];
echo json_encode($data);