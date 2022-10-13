<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
        <link rel="shortcut icon" type="image/png" href="fevicon.png">
</head>
<body style="background:#003366; color: white; font-size:20px;text-align:center;">
<h1>Group Messaging System</h1>
<?php
include "conn.php";
if (isset($_POST["signup"])) {
    if ($_POST["email1"] != '' and $_POST["password1"] != '' and $_POST["username"] != '') {

        $res = mysqli_query($link, "SELECT * FROM signupuser WHERE email='$_POST[email1]'");

        if (mysqli_num_rows($res)) {
            echo '<script>
	alert("There is Already An Account is With This Email Address!");
	</script>';
        } else {

            mysqli_query($link, "INSERT INTO signupuser VALUES ('','$_POST[email1]','$_POST[password1]','','$_POST[username]')");
            echo '<script>
     alert("Your Account is successfully created");
     </script>';

        }
    } else {
        echo '<script>
     alert("Please fill Up all requirements");
     </script>';
    }

}
if (isset($_POST["login"])) {
    $_SESSION["email"] = $_POST["email2"];
    $_SESSION["password"] = $_POST["password2"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $res = mysqli_query($link, "SELECT * FROM signupuser WHERE email='$email'AND password='$password'");
    if (mysqli_num_rows($res)) {

        mysqli_query($link, "UPDATE signupuser SET status='1'  WHERE email='$email'AND password='$password'");

        header("location:home.php");
        ob_enf_fluch();
    } else {
        echo '<script>
     alert("Email or Password is incorrect");
     </script>';

    }
}
?>

<form method="POST" action="">
<table align="center" style="border:2px solid;border-radius:30px;font-size:25px;">
<tr>
<th><h2>Log In here</h2></th>
</tr>
<tr>
<th><input style="border-radius:5px;" type="text" name="email2" value="" placeholder=" Email">
</th>
</tr>
<tr>
<th><input style="border-radius:5px;" type="password" name="password2" value="" placeholder=" Password"></th>
</tr>
<tr>
<th><input  type="submit" name="login" value="Log In"  style="color:white;background:#2271b3;border-radius:25px;font-size:19.2px;border:2px solid white;outline:none;cursor:pointer;"></th>
</tr>
</table>
<br>
<br>

	<table  align="center" style="border:2px solid;border-radius:30px;font-size:25px;">
		<tr>
			    <th><h2>Sign Up here</h2></th>
			</tr>
			<tr>
			    <th><input style="border-radius:5px;" type="text" name="username" value="" placeholder=" Username">
				</th>
			</tr>
			<tr>
			    <th><input style="border-radius:5px;" type="text" name="email1" value="" placeholder=" Email">
				</th>
			</tr>
			<tr>
				<th><input style="border-radius:5px;" type="password" name="password1" value="" placeholder=" Password"></th>
			</tr>
			<tr>
				<th><input type="submit" name="signup" value="Sign Up" style="color:white;background:#2271b3;border-radius:25px;font-size:19.2px;border:2px solid white;outline:none;cursor:pointer;"></th>
		    </tr>
</table>
</form>
</body>
</html>