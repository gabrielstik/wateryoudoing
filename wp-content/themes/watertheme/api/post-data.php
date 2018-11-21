<?

session_start();
$_SESSION['current_question'] = $_GET['next'];
$_SESSION['energy'] = $_GET['energy'];
$_SESSION['hunger'] = $_GET['hunger'];
$_SESSION['bladder'] = $_GET['bladder'];