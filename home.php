<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Messages</title>
        <link rel="shortcut icon" type="image/png" href="fevicon.png">
         <meta http-equiv="refresh" content="600">

</head>
<body style="background:#003366; color: white; font-size:20px;border:2px;text-align:center;">
<?php

$_SESSION["status"] = true;

include "conn.php";
$_SESSION["closeactivetab"] = 1;
$email = $_SESSION["email"];
$password = $_SESSION["password"];

$res = mysqli_query($link, "SELECT * FROM signupuser WHERE status='1' AND email='$email'AND password='$password'");
if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_array($res)) {
        $username = $row['username'];
    }
}

if (isset($_POST["logout"])) {
    mysqli_query($link, "UPDATE signupuser SET status='0'  WHERE email='$email'AND password='$password'");
    $_SESSION["status"] = false;
    header("location:index.php");
    ob_enf_fluch();
}

if (isset($_POST["send"])) {
    if ($_POST["msg"] != '') {
        mysqli_query($link, "INSERT INTO posts(sender,msg,email,password) VALUES('$username','$_POST[msg]','$email','$password')");

        reload();
    } else {
        echo '<script>
     alert("Please type something");
     </script>';
    }

}
function reload()
{
    header("location:home.php");
}
if ($username == "3103135_mydb") {
    header("location:index.php");
}
?>


<form method="POST" action="">
	<input style="background:#2271b3;color:white; border:2px solid white;padding:3.5px;font-size:19.2px;border-radius:25px; float: right;outline:none;cursor:pointer;" type="submit" name="logout" value="Log out">
<h2>Profile (<?php echo "$username"; ?>)</h2>
<div id="output" style="background-color:#2271b3;box-shadow:0px 1px 1px #000;height:400px;overflow-y: scroll;color:white;border:4px solid white;border-radius:7px;outline: none; text-align: left;" >
<?php

$res = mysqli_query($link, "SELECT * FROM posts ");
if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_array($res)) {
        echo "<div style='text-align: justify;padding-right:.5%;padding-left:.5%;'>" . "<big>" . $row["sender"] . " :- " . "</big>" . $row["msg"] . " (" . $row["date"] . ")" . "<br><br>" . "</div>";
    }
} else {
    echo "No message...";
}

?>
</div>

<div>
<textarea rows="3" placeholder=" Type to send message... " name="msg" style="width:50%;font-size:20px;border:6px solid #2271b3;border-radius:20px;outline: none;"></textarea>
</div>
<table align="center">

		<tr>
			<td>
			<input style="background:#2271b3;color:white; border:2px solid white;padding:3.5px;font-size:19.2px;border-radius:25px; outline:none;cursor:pointer;" type="submit" name="send" value="Send">

			</td>
			<td>

				<a style="color:white;text-decoration:none;border:2px solid white;padding:3.5px;background:#2271b3;border-radius:25px; outline:none;cursor:pointer;" href="active.php" target="_blank">Chat</a>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
var objDiv = document.getElementById("output");
objDiv.scrollTop = objDiv.scrollHeight;
</script>

<script type="text/javascript">
var beep5=new Audio();
beep5.src='beep5.wav';
beep5.play();
</script>
</body>
</html>