<?php
require_once('../lib/config.php');?>
<?php
$first_name = $_POST["first_name"];
$email = $_POST["email"];
$last_name = $_POST["last_name"];
$pan = $_POST["pan"]; 
$address = $_POST["address"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
//check for available user-details
$sql = "SELECT id FROM retailer WHERE email = '$email' LIMIT 1" ;
$check_query = mysqli_query($conn,$sql);
$count_email = mysqli_num_rows($check_query);
if($count_email > 0)
{
	echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
	exit();
}else{
	$run_query=$conn->query("INSERT INTO retailer SET first_name='".$first_name."',last_name='".$first_name."', email='".$email."',pan='".$pan."',address='".$address."',password='".$pwd."'");
    if($run_query >0)
    {
    	echo '<script>window.location.href = "login.php";</script>';
    }
}
?>