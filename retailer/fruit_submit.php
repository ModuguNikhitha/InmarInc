<?php
require_once('../lib/config.php');?>
<?php
$ret_id ='1';
$fruit_name = $_POST["fruit_name"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
/* var_dump($_POST);
exit; */
	$run_query=$conn->query("INSERT INTO fruits SET ret_id='".$ret_id."',fruit_name='".$fruit_name."', quantity='".$quantity."',price='".$price."'");
    if($run_query >0)
    {
    	echo '<script>window.location.href = "fruits.php";</script>';
    }
