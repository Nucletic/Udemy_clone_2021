<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$accepted = $_POST['accepted'];


$con = mysqli_connect("localhost", "root", "", "udemy");
if (!$con) {
    echo mysqli_connect_error();
} else {

    $q = "insert into signin values('$name','$email','$password','$accepted')";

    mysqli_query($con, $q);
    $r = mysqli_affected_rows($con);
    if ($r > 0)
        header("location: index.html");
    else
        echo "Some problem is occured";
}
