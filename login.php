<?php
$user_name =0;
$success =0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    // Variable declaration and sanitization
    $name = mysqli_real_escape_string($con, $_POST['user_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Selecting data from the database
    $sql = "SELECT * FROM `employees` WHERE name='$user_name'";
    $result = mysqli_query($con, $sql);

    // Checking if the connection is successful
    if ($result) {
        $num = mysqli_num_rows($result);
        // Checking if the user already exists
        if ($num > 0) {
            $user = 1;
        } else {
            // Insert data
            $sql = "INSERT INTO `employees` (user_name, email, password) VALUES ('$user_name', '$email', '$password')";
            $insertResult = mysqli_query($conn, $sql);
            if ($insertResult) {
                include 'main.php';
            } else {
                die(mysqli_error($con));
            }
        }
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php 
    if ($user_name) {
        echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Iza joh!</strong> User already exists.
        </div>';
    }
    ?>

    <?php 
    if ($success) {
       
        echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success</strong> You have successfully signed in!!.
       </div>';
       header("Location: dashboard.php");

    }


    ///if ($success) {
        // Successful login, redirect to another page
       // $_SESSION['user_name'] = $user_name;
     //   header("Location: dashboard.php");
     //   exit();
   // } else {
      //  echo "Invalid username or password.";
   // }

    
    ?>
    <main>
        <div class="container mt-5">
            <form action="dashboard.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="user_name" class="form-label">User Name:</label>
                    <input type="text" class="form-control" placeholder="Enter your username" name="user_name" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
