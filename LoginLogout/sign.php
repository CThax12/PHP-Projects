<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

  //  $sql = "insert into registration (username, password) values('$username', '$password')";
//
  //  $result = mysqli_query($con, $sql);
//
  //  if ($result) {
    //    echo "Data inserted successfully";
    //}
    //else {
   //     die(mysqli_error($con));
    //}
//}

    $sql = "Select * from registration where username='$username'";
$result = mysqli_query($con, $sql);

if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0 ) {
            echo "Username already taken";
        }
        else {
            $sql = "insert into registration (username, password) values('$username', '$password')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "Data inserted successfully";
            }
            else {
                die(mysqli_error($con));
            }
}
        }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registration Page</title>
  </head>
  <body>
    <h1 class ="text-center mt-2">Registration</h1>
    <div class ="container mt-5">
    <form action="sign.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" placeholder="Username" name="username">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
</div>
  </body>
</html>