<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $department = $_POST['department'];
        $user_name = $_POST['user_name'];
        $user_password = $_POST['department'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hrms_db";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '$fname', '$lname', '$email')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>