<form action=" " method="POST">
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username[]" placeholder="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password[]" placeholder="password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Login"></td>
	</tr>
</form>

<?php
	session_start();
	//error_reporting(0);
		$user = array(
					array(
						"kode" => "1",
 					    "username" => "afnenda",
					    "password" => "afnenda"),
					array(
						"kode" => "2",
						"username" => "ashpya",
						"password" => "ashpya")
				);
		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
				$_SESSION["username"] = $username;
				
				
			}
			else{
				header("location:proses.php");
			}
		}
?>