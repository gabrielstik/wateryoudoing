<?

session_start();
session_destroy();
session_start();
$_SESSION['energy'] = 100;
$_SESSION['hunger'] = 100;
$_SESSION['bladder'] = 100;
$_SESSION['liters'] = 0;
header('Location: /quizz');