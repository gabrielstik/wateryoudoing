<?

session_start();
$data = [
  'liters' => $_SESSION['liters'],
  'energy' => $_SESSION['energy'],
  'hunger' => $_SESSION['hunger'],
  'bladder' => $_SESSION['bladder'],
  'next' => $_SESSION['current_question'],
  'termsHygiene' => $_SESSION['termsHygiene'],
  'termsTransport' => $_SESSION['termsTransport'],
  'termsTechnology' => $_SESSION['termsTechnology'],
  'termsDrinkEat' => $_SESSION['termsDrinkEat'],
  'termsActivities' => $_SESSION['termsActivities']
];
echo json_encode($data);