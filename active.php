<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Acive</title>
	<meta http-equiv="refresh" content="5">
        <link rel="shortcut icon" type="image/png" href="fevicon.png">
</head>
<body style="background:#003366; color: white; font-size:20px;border:2px solid white;border-radius:50px;text-align:center;">
<h2> Persons who are Active now:</h2>
<?php
$flag = false;
include "conn.php";
$email = $_SESSION["email"];
$password = $_SESSION["password"];

$res = mysqli_query($link, "SELECT * FROM signupuser WHERE status=1 AND email!='$email'");

if (mysqli_num_rows($res)) {
    $flag = true;
    while ($row = mysqli_fetch_array($res)) {
        $username = $row['username'];
        echo " $username" . "<br><br>";
    }
}
$status = $_SESSION["status"];
if ($flag == false) {
    echo " No one Active now..." . "<br><br>";
}
switch ($status) {
    case false:
        {
            session_destroy();
            header("location:index.php");
            ob_enf_fluch();
            break;
        }
    default:
        {

        }
}
$closeactivetab = $_SESSION["closeactivetab"];
if ($closeactivetab != 1) {
    session_destroy();
    header("location:index.php");

}
?>
</body>
</html>