<?php 
require_once('../lib/config.php');
	session_start();

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$pwd=$_POST['pwd'];
		$sql="SELECT * FROM shopperr WHERE email='$email' AND password='$pwd'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);

		if($count==1){
				$row=mysqli_fetch_array($run_query);
				$_SESSION['uid']=$row['id'];
				$_SESSION['uname']=$row['first_name'];
				echo "true";
				echo '<script>window.location.href = "details.php";</script>';
		}
		else{
			echo "User Email or Password Not exist";
			//echo '<script>window.location.href = "login.php";</script>';
		}

 ?>