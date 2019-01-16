<?php
require_once('../lib/config.php');?>
<?php
$ret_id = $_POST["sid"];
$store_name = $_POST["store_name"];
$location = $_POST["store_location"];
$address = $_POST["address"];
	$run_query=$conn->query("INSERT INTO store_details SET retailer_id='".$ret_id."',store_name='".$store_name."', location='".$location."',address='".$address."'");
    if($run_query >0)
    {
    	echo '<script>window.location.href = "details.php";</script>';
    }
