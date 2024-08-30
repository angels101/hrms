<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $department = $_POST['department'];
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
    }

    

    // using sql to create a data entry query
    $sql = "INSERT INTO employees (first_name, last_name, department, user_name, user_password, confirm_password, email, contact_no)
     VALUES ('$first_name', '$last_name', '$department', '$user_name', '$user_password','$confirm_password', '$email', '$contact_no',)";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        include 'login.php';
    }
  
    // close connection
    mysqli_close($con);

?>