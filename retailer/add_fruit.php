<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Register form</h2>
  <form class="form-horizontal" action="fruit_submit.php" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Fruit Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"placeholder="Enter email" name="fruit_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Quantity</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter email" name="quantity">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Price:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Price" name="price">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
