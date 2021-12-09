<?php
    include 'connect.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container mt-5">
        <a href="user.php"><button class="btn btn-primary">Add User</button></a>
        <br> <br>
        <table class="table table-success table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">MOBILE</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">OPERATORS</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from `crud`";
                $results = mysqli_query($con, $sql);
                if($results) {
                    while($row=mysqli_fetch_assoc($results)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>

                            <td>
                                <a href="update.php?updateid='.$id.'"><button class="btn btn-warning">Edit</button></a>
                                <a href="delete.php?deleteid='.$id.'"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        ';
                    }
                }
            ?>

        </tbody>
        </table>
    </div>
  </body>
</html>