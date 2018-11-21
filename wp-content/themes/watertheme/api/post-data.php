<?

session_start();
$_SESSION['current_question'] = $_GET['next'];
$_SESSION['energy'] = intval($_GET['energy']);
$_SESSION['hunger'] = intval($_GET['hunger']);
$_SESSION['bladder'] = intval($_GET['bladder']);