<?php session_start();//Start PHP session?>
<?php ob_start();//Required for the redirect to work?>

<?php
if(!$_SESSION['user'])
    header('Location: login.php');

include_once ("includes/userfunctions.php");
include_once ("includes/commonfunctions.php");

$userType = GetUserType($_SESSION['user']);
if($userType != "superadmin" && $userType != "admin")
{
    header("location: index.php");
    exit;
}

$site = $_POST["site"];
$ppcode = $_POST["paypalcode"];
$goal = $_POST["goal"];
$current = $_POST["current"];

SavePaypal($site, $goal, $current, $ppcode);

echo "PAYPAL CODE SAVED<br />";
?>
