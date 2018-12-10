<?php session_start(); ?>
<?php include 	"db.php";

if (isset($_POST['login_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$get_user_query = "select * from users where username = '$username' and password = '$password'";
	$get_user_queryEx = mysqli_query($connection, $get_user_query);
	if (($get_user_queryEx->num_rows) > 0) {
		$user = $get_user_queryEx -> fetch_assoc();
		$role = $user['role'];
		echo $role;
		if ($role == "admin") {
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			header("Location: ../admin/");
		}
		else if($role == "staff"){
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			header("Location: ../admin/staff.php");
		}
		else{
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			header("Location: ../index.php");
		}
	}
	else{

		header("Location: ../index.php");
	}

}


 ?>