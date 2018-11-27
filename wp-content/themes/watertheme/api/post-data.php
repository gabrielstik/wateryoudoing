<?

session_start();
$_SESSION['current_question'] = $_GET['next'];
$_SESSION['liters'] = intval($_GET['liters']);
$_SESSION['energy'] = intval($_GET['energy']);
$_SESSION['hunger'] = intval($_GET['hunger']);
$_SESSION['bladder'] = intval($_GET['bladder']);