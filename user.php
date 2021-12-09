<?php

    include 'connect.php';
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "insert into `crud` (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
        $results = mysqli_query($con, $sql);
        if(!$results) {
            echo 'Problem on fetching data';
        } else {
            header('location: display.php');
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container mt-5">
        <form class="form-group" method='POST'>
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" autocomplete="off" placeholder="Enter your name">

            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" autocomplete="off" placeholder="Enter your email">

            <label for="mobile">Mobile</label>
            <input class="form-control" type="number" name="mobile" autocomplete="off" placeholder="Enter your mobile">

            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" autocomplete="off" placeholder="Enter your password">
            <br>
            <button class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>