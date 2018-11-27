<?

session_start();
$data = [
  'liters' => $_SESSION['liters'],
  'energy' => $_SESSION['energy'],
  'hunger' => $_SESSION['hunger'],
  'bladder' => $_SESSION['bladder'],
  'next' => $_SESSION['next']
];
echo json_encode($data);