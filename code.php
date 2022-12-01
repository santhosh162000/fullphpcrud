<?php
require 'dbcon.php';

if(isset($_POST['save_employee']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);

    $query = "INSERT INTO fullemployee (name,email,phone,designation) VALUES ('$name','$email','$phone','$designation')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: index.php");
        exit(0);
    }
    else
    {
        header("Location: employee-create.php");
        exit(0);
    }
}

?>