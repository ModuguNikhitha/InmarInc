<?php 
include('header.php');
require_once('../lib/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br/><br/><br/><br/>
<div class="container">
  <a href="add_fruit.php" class="btn btn-info">Add Fruit Details</a>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php

$i=1;

$ddaa = $conn->query("SELECT fruit_name, quantity, price FROM fruits ORDER BY id");
			    while ($data = mysqli_fetch_array($ddaa))
			    {
			 echo "                                
			 <tr>
			   <td>$i</td>
			   <td>$data[0]</td>
			   <td>$data[1]</td>
			   <td>$data[2]</td>
			</tr>
				";
				$i++;
				}
			?>
    
    </tbody>
  </table>
</div>
</body>
</html>
