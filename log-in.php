<?php
$email = $_POST['email'];
$password = $_POST['password'];


$con = mysqli_connect("localhost", "root", "", "udemy");
if (!$con) {
    echo mysqli_connect_error();
} else {
    $q = "select * from signin where email='$email' and password='$password'";

    $res = mysqli_query($con, $q);

    $r = mysqli_fetch_row($res);

    if ($r)
        header("location: index.html");
    else
        echo "Email or password is incorrect";
}
