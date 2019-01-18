<?php
require_once('../lib/config.php');?>
<?php
$shopper_id = $_POST["sid"];
$shopper_name = $_POST["shopper_name"];
$shopper_location = $_POST["shopper_location"];
$shopper_address = $_POST["shopper_address"];
	$run_query=$conn->query("INSERT INTO shopper_details SET shopper_id='".$shopper_id."',shopper_name='".$shopper_name."', shopper_location='".$shopper_location."',shopper_address='".$shopper_address."'");
    if($run_query >0)
    {
    	echo '<script>window.location.href = "details.php";</script>';
    }
