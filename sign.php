<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $USER = $_POST['username'];
    $PASS = $_POST['password'];

    $sql = "insert into registration (username,password)
    values('$USER','$PASS')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));
    }

}


?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Sign UP Page </h1>
    <div class="container mt-5 ">
    <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" placeholder="Enter name" name="username">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter the password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html>