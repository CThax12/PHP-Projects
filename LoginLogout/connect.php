<?php

$HOSTNAME = 'localhost'; 
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'signupforms';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if($con) {
    echo "Connection success";
}
else {
    die(mysqli_error($con));
}

?>