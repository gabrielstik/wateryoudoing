<?

session_start();
$_SESSION['current_question'] = $_GET['next'];
$_SESSION['liters'] = intval($_GET['liters']);
$_SESSION['energy'] = intval($_GET['energy']);
$_SESSION['hunger'] = intval($_GET['hunger']);
$_SESSION['bladder'] = intval($_GET['bladder']);
$_SESSION['termsHygiene'] = intval($_GET['termsHygiene']);
$_SESSION['termsTransport'] = intval($_GET['termsTransport']);
$_SESSION['termsTechnology'] = intval($_GET['termsTechnology']);
$_SESSION['termsDrinkEat'] = intval($_GET['termsDrinkEat']);
$_SESSION['termsActivities'] = intval($_GET['termsActivities']);