<?

session_start();
session_destroy();
session_start();
$_SESSION['energy'] = 100;
$_SESSION['hunger'] = 100;
$_SESSION['bladder'] = 100;
$_SESSION['liters'] = 0;
$_SESSION['termsHygiene'] = 0;
$_SESSION['termsTransport'] = 0;
$_SESSION['termsTechnology'] = 0;
$_SESSION['termsDrinkEat'] = 0;
$_SESSION['termsActivities'] = 0;
header('Location: /quizz');